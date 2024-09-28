<?php
namespace App\Controllers;
use App\Models\admin;
use CodeIgniter\Controller;

class Login extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function login()
    {
        session()->start();
        $admin = new admin();
        $userid = $this->request->getPost('eid'); // Assuming 'eid' is your non-primary key field
        $password = $this->request->getPost('pass');
        // Find user by 'userid' (non-primary key)
        $user = $admin->where('eid', $userid)->first();

        if ($user and $user['pass']==$password)  {
    session()->set('user', $user['user']);
    return redirect()->to(base_url('dashboard'));
    // User exists
    // Perform your logic here
} else {
    // User does not exist
    return redirect()->to(base_url('login'))->with('error', 'Invalid Login Credentials');
}
       
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('login');
    }
}
?>
