<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;

class KirimPesanJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $nomorPengolah;
    protected $pengolah;
    protected $nomor;
    protected $link;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($nomorPengolah, $pengolah, $nomor, $link)
    {
        $this->nomorPengolah = $nomorPengolah;
        $this->pengolah = $pengolah;
        $this->nomor = $nomor;
        $this->link = $link;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        // Inisialisasi cURL
        $curl = curl_init();

        // Pengaturan opsi cURL
        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://api.fonnte.com/send',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => array(
                'target' => $this->nomorPengolah,
                'message' => "Hallo {$this->pengolah}, ada surat baru nih nomor {$this->nomor}, ini link dokumennya ya {$this->link}"
            ),
            CURLOPT_HTTPHEADER => array(
                'Authorization: VKzQmQqAY9CvrzanDeTn'
            ),
        ));

        // Eksekusi cURL dan simpan respons
        $response = curl_exec($curl);

        // Tangani error atau respons berhasil
        if ($response === false) {
            $error_msg = curl_error($curl);
            Log::error('cURL Error: ' . $error_msg);
        } else {
            Log::info('cURL Response: ' . $response);
        }

        // Tutup sesi cURL
        curl_close($curl);
    }
}
