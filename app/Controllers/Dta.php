<?php 
 namespace App\controllers;

use App\Models\Employee;

class Dta extends Basecontroller
{
    public function index()
    {
        if (!session()->has('user')) {
            
                return redirect()->to(base_url('login'))->with('error', 'Invalid Login Credentials');
    
            }
    $employee = new Employee();
    $data['employee'] = $employee->findAll();
    return view('dta', $data);
    }
        public function create()
        {
            if (!session()->has('user')) {
            
                return redirect()->to(base_url('login'))->with('error', 'Invalid Login Credentials');
    
            }
            return view('add');   
        }
        public function store()
        {
            $employee = new Employee();

            $filename = '';
            $file = $this->request->getFile('image');
            if ($file){
                $fileName = $file->getRandomName();
                $file->move('uploads', $fileName);
            }
             
           
            $data = [
                'eid' => $this->request->getPost('eid'),
                'en' => $this->request->getPost('en'),
                'ad'=>$this->request->getPost('ad'),
                'dg' => $this->request->getPost('dg'),
                'sr' => $this->request->getPost('sr'),
                'image' => 'uploads/'.$fileName ,
                

            ];
            
            $employee->save($data);
            return redirect()->to(base_url('dta'))->with('status','Employee Added successfully');
        }

        public function edit($id)
        {
            if (!session()->has('user')) {
            
                return redirect()->to(base_url('login'))->with('error', 'Invalid Login Credentials');
    
            }
            $employee = new Employee();
            $data['employee'] = $employee->find($id);
            return view('edit', $data);

        }

        public function update($id)
        {
            $employee = new Employee();
            $filename = '';
            $file = $this->request->getFile('image');
            if ($file){
                $fileName = $file->getRandomName();
                $file->move('uploads', $fileName);
            }
            $data = [
                'eid' => $this->request->getPost('eid'),
                'en' => $this->request->getPost('en'),
                'ad'=>$this->request->getPost('ad'),
                'dg' => $this->request->getPost('dg'),
                'sr' => $this->request->getPost('sr'),
                'image' => 'uploads/'.$fileName , 
            ];
            $employee->update($id, $data);
            return redirect()->to(base_url('dta'))->with('status','Employee Updated successfully');
        }

        public function delete($id)
        {
        $employee = new Employee();
        $employee->delete($id);
        return redirect()->to(base_url('dta'))->with('status','Employee Deleted successfully');
        }

}
?>
