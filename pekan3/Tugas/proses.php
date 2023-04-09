<?php
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$matkul = $_POST['matkul'];
$gender = $_POST['jk'];
$skill = $_POST['skill'];
$email = $_POST['email'];

function skor_skill($skill)
{
    $skill_list = [
        'HTML' => 10,
        'CSS' => 10,
        'JavaScript' => 20,
        'RWD Bootstrap' => 20,
        'PHP' => 20,
        'Python' => 30,
        'Java' => 50,
    ];
    $total = 0; 
    foreach ($skill as $skill) {
        $total = $total + $skill_list[$skill];
    }

    return $total;
}

function kategori_skill($skill)
{
    $skill_list = [
        'HTML' => 10,
        'CSS' => 10,
        'JavaScript' => 20,
        'RWD Bootstrap' => 20,
        'PHP' => 20,
        'Python' => 30,
        'Java' => 50,
    ];
    $total = 0; 
    foreach ($skill as $skill) {
        $total = $total + $skill_list[$skill];
    }

    
        if ($total >= 100 && $total <=150 ) {
            $total = "Sangat Baik";
        } elseif ($total >= 60 && $total <=100 ) {
            $total = "Baik";
        } elseif ($total >= 40 && $total <=60 ) {
            $total = "Cukup";
        } elseif ($total >= 0 && $total <=40 ) {
            $total = "Kurang";
        } else {
            $total = "Tidak Memandai";
        }
    return $total;
}


echo "NIM: $nim";
echo "<br> Nama: $nama";
echo "<br> Program Studi: $matkul";
echo "<br> Jenis Kelamin: $gender";
echo "<br> Skill Programming: ";
foreach ($skill as $skil) {
    echo $skil . ", ";
}
echo "<br>Skor Skill : " . skor_skill($skill);
echo "<br>Kategori Skill: " . kategori_skill($skill);
echo "<br> Email: $email";



?>