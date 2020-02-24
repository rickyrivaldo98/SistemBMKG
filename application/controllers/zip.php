<?php

class Zip extends CI_Controller
{


    public function zippdf($id)
    {


        $data['download'] = $this->db->query("select * from pemohon1 where idpemohon ='$id'")->result();
        $coba = $data['download'];

        foreach ($coba as $d) {
            $suratpengantar = $d->suratpengantar;
            $suratpernyataan = $d->suratpernyataan;
            $proposal = $d->proposal;
        }

        $data = array(
            'suratpengantar.pdf' => $suratpengantar,
            'suratpernyataan.pdf' => $suratpernyataan,
            'proposal.pdf' => $proposal

        );
        $file = $this->zip->add_data($suratpengantar);
        $file = $this->zip->add_data($suratpernyataan);
        $file = $this->zip->add_data($proposal);


        $path = base_url() . 'upload/data' . $file;
        $this->zip->read_file($path);
        $this->zip->archive($path);
        $this->zip->download('hehehe.zip');
    }
}
