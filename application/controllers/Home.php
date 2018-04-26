<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    function __construct() {

        parent::__construct();
        error_reporting(E_PARSE);
        $this->load->model('Md');
        $this->load->library('session');
        $this->load->library('encrypt');
    }

    public function index() {

             $this->load->view('index');
    }

    public function dashboard() {
        if ($this->session->userdata('username') == "") {
            $this->session->sess_destroy();
            redirect('welcome', 'refresh');
        }
        $query = $this->Md->query("SELECT * FROM users ");
        if ($query) {
            $data['users'] = $query;
        }
        $query = $this->Md->query("SELECT * FROM schedule where   status<>'paid' ");
        if ($query) {
            $data['pending'] = $query;
        }
        $query = $this->Md->query("SELECT * FROM schedule where  status='paid' ");
        if ($query) {
            $data['paid'] = $query;
        }
         $query = $this->Md->query("SELECT * FROM customer where  category='Physician' ");
        if ($query) {
            $data['physicians'] = $query;
        }
        $query = $this->Md->query("SELECT * FROM customer");
        if ($query) {
            $data['customers'] = $query;
        }
        $query = $this->Md->query("SELECT * FROM delivery ");
        if ($query) {
            $data['deliveries'] = $query;
        }
        $query = $this->Md->query("SELECT * FROM item ");
        if ($query) {
            $data['products'] = $query;
        }
        $query = $this->Md->query("SELECT * FROM invoice  ");
        if ($query) {
            $data['invoices'] = $query;
        }
         $query = $this->Md->query("SELECT *,users.name AS user,users.image AS userImage,customer.name as customer,customer.image AS customerImage,item.name AS product,item.image AS itemImage FROM orders LEFT JOIN users ON orders.UserID  = users.Id LEFT JOIN customer ON orders.CustomerID = customer.ID LEFT JOIN item ON orders.ItemID = item.Id LIMIT 5");
        if ($query) {
            $data['d'] = $query;
        } else {
            $data['d'] = array();
        }        

        $this->load->view('dashboard', $data);
    }

    public function registration() {

        // $query = $this->Md->query("SELECT * FROM users where org='".$this->session->userdata('orgid')."'");
        $query = $this->Md->query("SELECT * FROM users");

        if ($query) {
            $data['users'] = $query;
        } else {
            $data['users'] = array();
        }
        $this->load->view('login-page', $data);
    }

    public function version() {

        $this->load->view('version');
    }

    public function page() {

        $this->load->view('page');
    }

    public function contact() {

        // $query = $this->Md->query("SELECT * FROM users where org='".$this->session->userdata('orgid')."'");
        $query = $this->Md->query("SELECT * FROM users");

        if ($query) {
            $data['users'] = $query;
        } else {
            $data['users'] = array();
        }
        $this->load->view('login-page', $data);
    }

    public function start() {
        // $query = $this->Md->query("SELECT * FROM users where org='".$this->session->userdata('orgid')."'");
        $query = $this->Md->query("SELECT * FROM users");


//  var_dump($query);
        if ($query) {
            $data['users'] = $query;
        } else {
            $data['users'] = array();
        }


        $this->load->view('start-page', $data);
    }

    public function logout() {

        $this->session->sess_destroy();
        redirect('home', 'refresh');
    }

    public function login() {

        // redirect('/home/home', 'refresh');
        //return;

        $this->load->helper(array('form', 'url'));
        $email = $this->input->post('emails');
        $password = md5($this->input->post('passwords'));
        // echo md5($password) ;
        $get_user = $this->Md->query("SELECT *,users.id as userID,organisation.email AS org_email,users.email AS user_email,users.address AS user_address,organisation.address AS org_address,users.orgID AS orgID,users.surname AS user,organisation.name AS organisation,organisation.image AS org_image,users.image AS user_image FROM users LEFT JOIN organisation ON organisation.id = users.orgID LEFT JOIN roles ON roles.title = users.roles WHERE users.contact = '" . $email . "' AND users.passwords='" . $password . "' LIMIT 1");

        if (count($get_user) > 0) {
            //var_dump($get_user);
            // return;
            foreach ($get_user as $resv) {

                $this->session->set_userdata('name', $resv->organisation);
                $this->session->set_userdata('org_image', $resv->org_image);
                $this->session->set_userdata('address', $resv->address);
                $this->session->set_userdata('code', $resv->code);
                $this->session->set_userdata('top', $resv->top);
                $this->session->set_userdata('vat', $resv->vat);
                $this->session->set_userdata('tin', $resv->tin);
                $this->session->set_userdata('country', $resv->country);
                $this->session->set_userdata('org_email', $resv->org_email);
                // $this->session->set_userdata('license', $license);
                $this->session->set_userdata('username', $resv->surname . ' ' . $resv->lastname);
                $this->session->set_userdata('orgID', $resv->orgID);

                $views = $this->Md->query_cell("SELECT * FROM  roles where title= '" . $resv->roles . "' AND orgID = '" . $resv->orgID . "'", 'views');
                $actions = $this->Md->query_cell("SELECT * FROM  roles where title= '" . $resv->roles . "' AND orgID = '" . $resv->orgID . "'", 'actions');

                if (strlen($views) < 3 || strlen($actions) < 3) {
                    if (strlen($resv->roles) > 2) {

                        $user = array('created' => date('d-m-Y H:i:s'), 'id' => $this->GUID(), 'title' => $resv->roles, 'views' => 'calendar time sheets files clients tasks  templates  documents users page', 'actions' => 'create update delete edit', 'orgID' => $resv->orgID);
                        $this->Md->save($user, 'roles');
                        $views = 'calendar time sheets files clients tasks  templates documents users';
                        $actions = 'create update delete edit';
                    } else {

                        $user = array('created' => date('d-m-Y H:i:s'), 'id' => $this->GUID(), 'title' => 'Administrator', 'views' => 'fee expense petty wallet report calendar time sheets files clients tasks payments expenses wallet templates roles  documents users page additions', 'actions' => 'create update delete edit', 'orgID' => $resv->orgID);
                        $this->Md->save($user, 'roles');
                        $views = 'fee expense petty wallets report profile organisation calendar time sheets files clients tasks payments expenses wallet templates roles  documents users page additions';
                        $actions = 'create update delete edit';
                    }
                }
                $newdata = array(
                    'userID' => $resv->userID,
                    'orgID' => $resv->orgID,
                    'username' => $resv->surname . ' ' . $resv->lastname,
                    'email' => $resv->user_email,
                    'user_image' => $resv->user_image,
                    'category' => $resv->category,
                    'designation' => $resv->designation,
                    'views' => $views,
                    'actions' => $actions,
                    'status' => $resv->status,
                    'logged_in' => TRUE
                );
                $this->session->set_userdata($newdata);
            }
            // echo "User YES";
            redirect('home/dashboard', 'refresh');
        } else {
            //echo"no user";
            $this->session->set_flashdata('msg', '<span href="<?php echo base_url(); ?>index.php/home/registration" class="btn btn-error"> ! User does not exist</span>');
            redirect('home', 'refresh');
        }
    }

    public function GUID() {
        if (function_exists('com_create_guid') === true) {
            return trim(com_create_guid(), '{}');
        }

        return sprintf('%04X%04X-%04X-%04X-%04X-%04X%04X%04X', mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(16384, 20479), mt_rand(32768, 49151), mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(0, 65535));
    }

    public function student() {
        $this->load->view('private');
    }

    public function register() {
        $this->load->helper(array('form', 'url'));

        $fname = $this->input->post('fname');
        $lname = $this->input->post('lname');
        $password = $this->input->post('password1');


        if ($fname != "" && $lname != "") {


            $email = $this->input->post('email');
            $password = $password;
            $key = $email;

            $password = $this->encrypt->encode($password, $key);

            $get_result = $this->Md->check($email, 'email', 'student');

            if (!$get_result) {
                $this->session->set_flashdata('msg', '<div class="alert alert-error">
                                                   
                                                <strong>
                                                 Email already in use	</strong>									
						</div>');
                redirect('/management/student', 'refresh');
            }


            $file_element_name = 'userfile';



            $config['upload_path'] = 'uploads/';
// $config['upload_path'] = '/uploads/';
            $config['allowed_types'] = '*';
            $config['encrypt_name'] = FALSE;

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload($file_element_name)) {
                $status = 'error';
                echo $msg = $this->upload->display_errors('', '');
            } else {

                $data = $this->upload->data();
                $other = $this->input->post('other');
                $gender = $this->input->post('gender');
                $dob = date('Y-m-d', strtotime($this->input->post('dob')));
                $country = $this->input->post('country');
                if ($this->session->userdata('level') == 1) {

                    $country = $this->session->userdata('country');
                }
                $contact = $this->input->post('contact');
                $cohort = $this->input->post('cohort');
                $submitted = date('Y-m-d');
                $file = $data['file_name'];
                $email = $this->input->post('email');

                $student = array('image' => $file, 'fname' => $fname, 'lname' => $lname, 'other' => $other, 'email' => $email, 'gender' => $gender, 'dob' => $dob, 'country' => $country, 'password' => $password, 'contact' => $contact, 'cohort' => $cohort, 'submitted' => date('Y-m-d H:i:s'), 'status' => 'false');
                $file_id = $this->Md->save($student, 'student');
                ;
                $this->session->set_flashdata('msg', '<div class="alert alert-success">
                                                   
                                                <strong>
                                                 information saved</strong>									
						</div>');

                redirect('/management/student', 'refresh');
            }
        }
    }

    public function info() {

        $this->load->view('info-page', $data);
    }

    public function help() {

        $this->load->view('help-page', $data);
    }

    public function management() {

        $cty = $this->session->userdata('country');

        $name = $this->session->userdata('name');
        $query = $this->Md->get('reciever', $name, 'chat');
//  var_dump($query);
        if ($query) {
            $data['chats'] = $query;
        } else {
            $data['chats'] = array();
        }
        $query = $this->Md->query("SELECT * FROM outbreak where country = '" . $cty . "'");
//  var_dump($query);
        if ($query) {
            $data['outbreaks'] = $query;
        } else {
            $data['outbreaks'] = array();
        }

        $query = $this->Md->query("SELECT * FROM publication where country = '" . $cty . "'");
//  var_dump($query);
        if ($query) {
            $data['pubs'] = $query;
        } else {
            $data['pubs'] = array();
        }
        $query = $this->Md->query("SELECT * FROM student where status = 'false'");
//  var_dump($query);
        if ($query) {
            $data['student_cnt_false'] = $query;
        } else {
            $data['student_cnt_false'] = array();
        }

        $query = $this->Md->query("SELECT * FROM publication where verified = 'false'");
//  var_dump($query);
        if ($query) {
            $data['publication_cnt_review'] = $query;
        } else {
            $data['publication_cnt_review'] = array();
        }
        $query = $this->Md->query("SELECT * FROM publication where accepted = 'no'");
//  var_dump($query);
        if ($query) {
            $data['publication_cnt_accepted'] = $query;
        } else {
            $data['publication_cnt_accepted'] = array();
        }

        $query = $this->Md->query("SELECT * FROM presentation where accepted = 'no'");
//  var_dump($query);
        if ($query) {
            $data['present_cnt_accepted'] = $query;
        } else {
            $data['present_cnt_accepted'] = array();
        }


        $this->load->view('center_page', $data);
    }

    public function projects() {

        $query = $this->Md->show('project');
        if ($query) {
            $data['projects'] = $query;
        } else {
            $data['projects'] = array();
        }


        $this->load->view('projects', $data);
    }

    public function services() {

        $query = $this->Md->show('service');
        if ($query) {
            $data['services'] = $query;
        } else {
            $data['services'] = array();
        }
        $this->load->view('services', $data);
    }

    public function profile() {

        $query = $this->Md->show('profile');
        if ($query) {
            $data['profiles'] = $query;
        } else {
            $data['profiles'] = array();
        }
        $this->load->view('profile', $data);
    }

    public function project() {
        $this->load->view('project');
    }

}
