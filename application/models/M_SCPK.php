<?php /**
 * 
 */
class M_SCPK extends CI_Model
{
		static $hasilSemua=Array();
		static $rulesBerat=Array();
		static $rulesSedang=Array();
		static $rulesRingan=Array();
		function __construct()
		{
			parent::__construct();			
		}

		function hitungFuzzy($inputStruktur,$inputPenunjang){
			//set_rules("kondisi1","kondisi2","hasil")
			//maksud komen diatas adalah if(kondisi1 AND kondisi2) THEN hasil;

			$rulesBerat[0]=new Rules_scpk();
			$rulesBerat[0]->set_rules('BERAT','BERAT','TINGGI');

			$rulesBerat[1]=new Rules_scpk();
			$rulesBerat[1]->set_rules('BERAT','SEDANG','TINGGI');

			$rulesBerat[2]=new Rules_scpk();
			$rulesBerat[2]->set_rules('BERAT','RINGAN','TINGGI');

			$rulesBerat[3]=new Rules_scpk();
			$rulesBerat[3]->set_rules('SEDANG','BERAT','RENDAH');

			$rulesBerat[4]=new Rules_scpk();
			$rulesBerat[4]->set_rules('SEDANG','SEDANG','RENDAH');

			$rulesBerat[5]=new Rules_scpk();
			$rulesBerat[5]->set_rules('SEDANG','RINGAN','RENDAH');

			$rulesBerat[6]=new Rules_scpk();
			$rulesBerat[6]->set_rules('RINGAN','BERAT','RENDAH');

			$rulesBerat[7]=new Rules_scpk();
			$rulesBerat[7]->set_rules('RINGAN','SEDANG','RENDAH');

			$rulesBerat[8]=new Rules_scpk();
			$rulesBerat[8]->set_rules('RINGAN','RINGAN','RENDAH');

//--------------------------------------------------------------------------------------
			$rulesSedang[0]=new Rules_scpk();
			$rulesSedang[0]->set_rules('BERAT','BERAT','RENDAH');

			$rulesSedang[1]=new Rules_scpk();
			$rulesSedang[1]->set_rules('BERAT','SEDANG','RENDAH');

			$rulesSedang[2]=new Rules_scpk();
			$rulesSedang[2]->set_rules('BERAT','RINGAN','RENDAH');

			$rulesSedang[3]=new Rules_scpk();
			$rulesSedang[3]->set_rules('SEDANG','BERAT','TINGGI');

			$rulesSedang[4]=new Rules_scpk();
			$rulesSedang[4]->set_rules('SEDANG','SEDANG','TINGGI');

			$rulesSedang[5]=new Rules_scpk();
			$rulesSedang[5]->set_rules('SEDANG','RINGAN','TINGGI');

			$rulesSedang[6]=new Rules_scpk();
			$rulesSedang[6]->set_rules('RINGAN','BERAT','RENDAH');

			$rulesSedang[7]=new Rules_scpk();
			$rulesSedang[7]->set_rules('RINGAN','SEDANG','RENDAH');

			$rulesSedang[8]=new Rules_scpk();
			$rulesSedang[8]->set_rules('RINGAN','RINGAN','RENDAH');

			//-----------------------------------------------------------------
			$rulesRingan[0]=new Rules_scpk();
			$rulesRingan[0]->set_rules('BERAT','BERAT','RENDAH');

			$rulesRingan[1]=new Rules_scpk();
			$rulesRingan[1]->set_rules('BERAT','SEDANG','RENDAH');

			$rulesRingan[2]=new Rules_scpk();
			$rulesRingan[2]->set_rules('BERAT','RINGAN','RENDAH');

			$rulesRingan[3]=new Rules_scpk();
			$rulesRingan[3]->set_rules('SEDANG','BERAT','RENDAH');

			$rulesRingan[4]=new Rules_scpk();
			$rulesRingan[4]->set_rules('SEDANG','SEDANG','RENDAH');

			$rulesRingan[5]=new Rules_scpk();
			$rulesRingan[5]->set_rules('SEDANG','RINGAN','RENDAH');

			$rulesRingan[6]=new Rules_scpk();
			$rulesRingan[6]->set_rules('RINGAN','BERAT','TINGGI');

			$rulesRingan[7]=new Rules_scpk();
			$rulesRingan[7]->set_rules('RINGAN','SEDANG','TINGGI');

			$rulesRingan[8]=new Rules_scpk();
			$rulesRingan[8]->set_rules('RINGAN','RINGAN','TINGGI');

			//cari nilai keanggotaan komponen struktur
			$nilaiAnggotaStrukRingan=$this->nil_anggota_ringan($inputStruktur);
			$nilaiAnggotaStrukSedang=$this->nil_anggota_sedang($inputStruktur);
			$nilaiAnggotaStrukBerat=$this->nil_anggota_berat($inputStruktur);
			
			//cari nilai keanggotaan komponen penunjang
			$nilaiAnggotaPenunRingan=$this->nil_anggota_ringan($inputPenunjang);
			$nilaiAnggotaPenunSedang=$this->nil_anggota_sedang($inputPenunjang);
			$nilaiAnggotaPenunBerat=$this->nil_anggota_berat($inputPenunjang);
			

			$hasilBerat=$this->hitungAlfadanZ($nilaiAnggotaStrukRingan,$nilaiAnggotaStrukSedang,$nilaiAnggotaStrukBerat,$nilaiAnggotaPenunRingan,$nilaiAnggotaPenunSedang,$nilaiAnggotaPenunBerat,$rulesBerat,'berat');
			$hasilSedang=$this->hitungAlfadanZ($nilaiAnggotaStrukRingan,$nilaiAnggotaStrukSedang,$nilaiAnggotaStrukBerat,$nilaiAnggotaPenunRingan,$nilaiAnggotaPenunSedang,$nilaiAnggotaPenunBerat,$rulesSedang,'sedang');
			$hasilRingan=$this->hitungAlfadanZ($nilaiAnggotaStrukRingan,$nilaiAnggotaStrukSedang,$nilaiAnggotaStrukBerat,$nilaiAnggotaPenunRingan,$nilaiAnggotaPenunSedang,$nilaiAnggotaPenunBerat,$rulesRingan,'ringan');
			$hasilSemua[]=$hasilBerat;
			$hasilSemua[]=$hasilSedang;
			$hasilSemua[]=$hasilRingan;
			//$hasilSemua=array_merge($hasilRingan,$hasilSedang);
			$max=0;
			foreach ($hasilSemua as $key) {
				if($key['kategori']=='TINGGI'&& $key['nilai']>$max){
					$jenis_kerusakan=$key['jenis'];
					$max=$key['nilai'];
				}
			}
			if($jenis_kerusakan=='ringan'){
				return 1;
			}else if($jenis_kerusakan=='sedang'){
				return 2;
			}else{
				return 3;
			}
			//return $hasilSemua;
		}

		function hitungAlfadanZ($nilaiStrukRingan,$nilaiStrukSedang,$nilaiStrukBerat,$nilaiPenunRingan,$nilaiPenunSedang,$nilaiPenunBerat,$aturan,$jenis){
			
			$alpha=Array();
			$z=Array();
			foreach ($aturan as $rules) {
				$struk;
				$penun;
				if($rules->kondisi1=="BERAT"){
					$struk=$nilaiStrukBerat;
				}else if ($rules->kondisi1=="SEDANG"){
					$struk=$nilaiStrukSedang;
				}else if ($rules->kondisi1=="RINGAN"){
					$struk=$nilaiStrukRingan;
				}

				if($rules->kondisi2=="BERAT"){
					$penun=$nilaiPenunBerat;
				}else if ($rules->kondisi2=="SEDANG"){
					$penun=$nilaiPenunSedang;
				}else if ($rules->kondisi2=="RINGAN"){
					$penun=$nilaiPenunRingan;
				}
				$alpha[]=min($struk,$penun);
			}
			//perintah di bawah ini digunakan untuk mencari nilai z masing-masing alpha
			for($i=0;$i<9;$i++){
				if($aturan[$i]->hasil=="TINGGI"){
					if($alpha[$i]==1){
						$z[]=75;
					}else if($alpha[$i]==0){
						$z[]=25;
					}else{
						$z[]=((75-25)*$alpha[$i])+25;
					}
				}
				else if ($aturan[$i]->hasil=="RENDAH"){
					if($alpha[$i]==1){
						$z[]=25;
					}else if($alpha[$i]==0){
						$z[]=75;
					}else {
						$z[]=(75-((75-25)*$alpha[$i]));
					}
				}

			}
			//print_r($alpha);
			//echo "<br>";
			$sumZAlpha=0;
			for($i=0;$i<9;$i++){
				$sumZAlpha+=($z[$i]*$alpha[$i]);
			}
			$sumAlpha=array_sum($alpha);

			$nilaiZTsukamoto=$sumZAlpha/$sumAlpha;
			$hasilFuzzy=$this->cariJenisKerusakan($nilaiZTsukamoto,$jenis);

			return $hasilFuzzy;

		}

		function cariJenisKerusakan($z,$jenis){
			$nilaiKerusakanRendah=0;
			$nilaiKerusakanTinggi=0;
			if($z<=25){
				$nilaiKerusakanRendah=1;
				$nilaiKerusakanTinggi=0;
			}else if($z>=75){
				$nilaiKerusakanRendah=0;
				$nilaiKerusakanTinggi=1;
			}else{
				$nilaiKerusakanRendah=(75-$z)/(75-25);
				$nilaiKerusakanTinggi=($z-25)/(75-25);
			}


			if($nilaiKerusakanRendah>$nilaiKerusakanTinggi){
				
				$hasil=array('kategori'=>'RENDAH','nilai'=>$nilaiKerusakanRendah,'jenis'=>$jenis);
				return $hasil;
			}else{
				$hasil= array('kategori'=>'TINGGI','nilai' => $nilaiKerusakanTinggi,'jenis'=>$jenis );
				
				return $hasil;
			}

		}
		
		function nil_anggota_ringan($input_persentase){
			if($input_persentase<=25){
				return 1;
			}else if($input_persentase>=50){
				return 0;
			}else{
				return (50-$input_persentase)/(50-25);
			}
		}
		function nil_anggota_sedang($input_persentase){
			if($input_persentase<=25||$input_persentase>=75){
				return 0;
			}else if($input_persentase>=25 && $input_persentase<=50){
				return ($input_persentase-25)/(50-25);
			}else if ($input_persentase>=50 && $input_persentase<=75){
				return (75-$input_persentase)/(75-50);
			}
		}
		function nil_anggota_berat($input_persentase){
			if($input_persentase<=50){
				return 0;
			}else if($input_persentase>=75){
				return 1;
			}else{
				return ($input_persentase-50)/(75-50);
			}
		}
		
} ?>