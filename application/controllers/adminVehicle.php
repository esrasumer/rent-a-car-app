<?
class adminVehicle extends CI_Controller
{
    public function index()
    {
        $this->load->model('araclar_model');
        $liste=new stdClass();
        $liste->araclar=$this->araclar_model->GetAll();
        $this->load->view('adminVehicle_index_view',$liste);
    }

    public function add()
    {
        $veri['uyari']=null;
        $this->load->view('adminVehicle_add_view',$veri);        
    }

    public function addPost()
    {
        $this->load->model('araclar_model');
        $arac_bilgileri = array(
            'marka' => $this->input->post('marka_'),
            'model' => $this->input->post('model_'),
            'model_yili' => $this->input->post('model_yili_'),
            'vites' => $this->input->post('vites_'),
            'yakit' => $this->input->post('yakit_'),
            'fiyat' => $this->input->post('fiyat_')
        );

        $result = $this->araclar_model->Add($arac_bilgileri);
        if($result)
        {
            $veri['uyari']='Tebrikler, bilgiler eklendi.';
        }
        else
        {
            $veri['uyari']='Üzgünüz, işlem esnasında bir hata meydana geldi';
        }

        $this->load->view('adminVehicle_add_view',$veri);
    }

    public function delete($id)
    {
        $this->load->model('araclar_model');
        $result=$this->araclar_model->Delete($id);
        if($result) {
            redirect(base_url('adminVehicle'));
        }
        else
        {
            //burada hata mesajı ekranı çıkarılabilir.
        }
    }

    public function edit($id)
    {
        $this->load->model('araclar_model');
        $veri['arac']=$this->araclar_model->Get($id);
        $veri['uyari']=null;
        $this->load->view('adminVehicle_edit_view',$veri);
    }

    public function editPost()
    {
        $this->load->model('araclar_model');
        $arac_id_ = $this->input->post('arac_id_');
        $arac=array(
            'arac_id'=>$arac_id_,
            'marka' => $this->input->post('marka_'),
            'model' => $this->input->post('model_'),
            'model_yili' => $this->input->post('model_yili_'),
            'vites' => $this->input->post('vites_'),
            'yakit' => $this->input->post('yakit_'),
            'fiyat' => $this->input->post('fiyat_')
        );

        $result=$this->araclar_model->Update($arac);

        if($result)
        {
            $veri['uyari']='Tebrikler, güncelleme başarılı';
        }
        else 
        {
            $veri['uyari']='İşlem esnasında bir HATA oluştu';
        }
        $veri['arac']=$this->araclar_model->Get($arac_id_);
        $this->load->view('adminVehicle_edit_view',$veri);
    }

    public function UploadImage($id)
    {
        $veri['uyari']=null;
        $veri['arac_id']=$id;
        $this->load->view('adminVehicle_UploadImage_view',$veri);
    }

    public function UploadImagePost()
    {
        $this->load->model('araclar_model');                
        $arac_id=$this->input->post('arac_id_');
        $resim_adi=$arac_id.'.jpg';
        
        $arac_bilgileri=$this->araclar_model->Get($arac_id);
        if($arac_bilgileri->resim_var_mi=='E')
        {
            //araç resmi var ise var olan resmi sil
            unlink('arac_resimleri/'.$resim_adi);
        }

        //upload kütüphanesi kullanılıyor
        $config['upload_path']='./arac_resimleri/';
        $config['allowed_types']='jpg|png|jpeg';
        $config['max_size']=2048;
        $config['max_height']=1600;
        $config['max_width']=2000;
        $config['file_name']=$resim_adi;

        //upload kütüphanesi yükleniyor
        $this->load->library('upload',$config);

        if(!$this->upload->do_upload('resim'))
        {
            $veri['uyari']='Resim yükleme başarısız oldu, açıklama:'.$this->upload->display_errors();
        }
        else
        {
            $result=$this->araclar_model->UpdateImage($arac_id);
            $veri['uyari']='Resim yüklendi.';            
        }
        $veri['arac_id']=$arac_id;
        $this->load->view('adminVehicle_UploadImage_view',$veri);
    }
}
?>