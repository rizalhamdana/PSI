<?php /**
 * 
 */
class M_SCPK extends CI_Model
{
	
		static $rules=Array();
		function __construct()
		{
			parent::__construct();			
		}

		function hitungFuzzy($inputStruktur,$inputPenunjang){
			//set_rules("kondisi1","kondisi2","hasil")
			//maksud komen diatas adalah if(kondisi1 AND kondisi2) THEN hasil;

			$rules[0]=new Rules_scpk();
			$rules[0]->set_rules('BERAT','BERAT','BERAT');

			$rules[1]=new Rules_scpk();
			$rules[1]->set_rules('BERAT','SEDANG','BERAT');

			$rules[2]=new Rules_scpk();
			$rules[2]->set_rules('BERAT','RINGAN','BERAT');

			$rules[3]=new Rules_scpk();
			$rules[3]->set_rules('SEDANG','BERAT','BERAT');

			$rules[4]=new Rules_scpk();
			$rules[4]->set_rules('SEDANG','SEDANG','RINGAN');

			$rules[5]=new Rules_scpk();
			$rules[5]->set_rules('SEDANG','RINGAN','RINGAN');

			$rules[6]=new Rules_scpk();
			$rules[6]->set_rules('RINGAN','BERAT','RINGAN');

			$rules[7]=new Rules_scpk();
			$rules[7]->set_rules('RINGAN','SEDANG','RINGAN');

			$rules[8]=new Rules_scpk();
			$rules[8]->set_rules('RINGAN','RINGAN','RINGAN');

			//cari nilai keanggotaan komponen struktur
			$nilaiAnggotaStrukRingan=$this->nil_anggota_ringan($inputStruktur);
			$nilaiAnggotaStrukSedang=$this->nil_anggota_sedang($inputStruktur);
			$nilaiAnggotaStrukBerat=$this->nil_anggota_berat($inputStruktur);
			
			//cari nilai keanggotaan komponen penunjang
			$nilaiAnggotaPenunRingan=$this->nil_anggota_ringan($inputPenunjang);
			$nilaiAnggotaPenunSedang=$this->nil_anggota_sedang($inputPenunjang);
			$nilaiAnggotaPenunBerat=$this->nil_anggota_berat($inputPenunjang);
			

			$hasil=$this->hitungAlfadanZ($nilaiAnggotaStrukRingan,$nilaiAnggotaStrukSedang,$nilaiAnggotaStrukBerat,$nilaiAnggotaPenunRingan,$nilaiAnggotaPenunSedang,$nilaiAnggotaPenunBerat,$rules);
			
			return $hasil;
		}

		function hitungAlfadanZ($nilaiStrukRingan,$nilaiStrukSedang,$nilaiStrukBerat,$nilaiPenunRingan,$nilaiPenunSedang,$nilaiPenunBerat,$aturan){
			
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
				if($aturan[$i]->hasil=="BERAT"){
					if($alpha[$i]==1){
						$z[]=75;
					}else if($alpha[$i]==0){
						$z[]=25;
					}else{
						$z[]=((75-25)*$alpha[$i])+25;
					}
				}
				else if ($aturan[$i]->hasil=="RINGAN"){
					if($alpha[$i]==1){
						$z[]=25;
					}else if($alpha[$i]==0){
						$z[]=75;
					}else {
						$z[]=(75-((75-25)*$alpha[$i]));
					}
				}

			}
			
			$sumZAlpha=0;
			for($i=0;$i<9;$i++){
				$sumZAlpha+=($z[$i]*$alpha[$i]);
			}
			$sumAlpha=array_sum($alpha);

			$nilaiZTsukamoto=$sumZAlpha/$sumAlpha;
			$hasilFuzzy=$this->cariJenisKerusakan($nilaiZTsukamoto);

			return $hasilFuzzy;

		}

		function cariJenisKerusakan($z){
			$nilaiKerusakanRingan=0;
			$nilaiKerusakanBerat=0;
			if($z<=25){
				$nilaiKerusakanRingan=1;
				$nilaiKerusakanBerat=0;
			}else if($z>=75){
				$nilaiKerusakanRingan=0;
				$nilaiKerusakanBerat=1;
			}else{
				$nilaiKerusakanRingan=(75-$z)/(75-25);
				$nilaiKerusakanBerat=($z-25)/(75-25);
			}


			if($nilaiKerusakanRingan>$nilaiKerusakanBerat){
				//echo "Rusak Ringan";
				return 1;
			}else{
				//echo "Rusak Berat";
				return 3;
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