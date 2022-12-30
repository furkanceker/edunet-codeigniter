<?php 

function active($menu){
    $ci=get_instance();
    if($ci->uri->segment(2)==$menu){
        echo "active";
    }
}

function postvalue($name,$xss=1){
    $ci=get_instance();
    return $ci->input->post($name,$xss);
}

function imageupload($name,$path){
    $ci=get_instance();

    $config['upload_path']='assets/upload/'.$path."/";
    $config['allowed_types'] = 'gif|jpg|png|jpeg';

    $ci->upload->initialize($config);

    if($ci->upload->do_upload($name)){
        $image=$ci->upload->data();
        return $config['upload_path'].$image['file_name'];
    }
    return null;
}

function back(){
    return redirect($_SERVER['HTTP_REFERER']);
}

function flash($type,$icon,$title){
        $message='<div class="alert alert-'.$type.' alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                  <h5><i class="icon fas fa-'.$icon.'"></i>'.$title.'</h5>
                  </div>';
        $ci=get_instance();
        $ci->session->set_flashdata('flashmessage',$message);
}
function flashread(){
    $ci=get_instance();
    echo $ci->session->flashdata('flashmessage');
}
function flashhome($type,$title){
    $message='<div class="alert alert-'.$type.' alert-dismissible fade show" role="alert">
            <strong>'.$title.'</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Kapat"></button>
            </div>';
    $ci=get_instance();
    $ci->session->set_flashdata('flashmessage2',$message);
}
function flash2read(){
    $ci=get_instance();
    echo $ci->session->flashdata('flashmessage2');
}