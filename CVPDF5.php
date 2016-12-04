<?php
require('fpdf.php');
session_start();

class PDF extends FPDF
{
    public $post;

    public function setPost($post)
    {
        $this->post = $_SESSION;
    }

    function Header()
    {
        global $titre;
    }

    function Footer()
    {
        extract($this->post);

        // Positionnement à 1,5 cm du bas
        $this->SetY(-15);
        // Arial italique 8
        $this->SetFont('Arial','I',8);
        // Couleur du texte en gris
        $this->SetTextColor(128);
    }

    function CaracteristicTitle($libelle)
    {
        extract($this->post);

        // Arial 12
        $this->SetFont('Arial','',18);
        // Couleur de fond
        $this->SetFillColor(200,220,255);
        // Titre
        $this->Cell(0,10,"$libelle",0,1,'C',true);
        // Saut de ligne
        $this->Ln(4);
    }

    function CaracteristicContent($content)
    {
        extract($this->post);

        $txt = $content;
        // Times 12
        $this->SetFont('Times','',12);
        // Sortie du texte justifié
        $this->MultiCell(0,5,$txt);
        // Saut de ligne
        $this->Ln();
    }

    function AddCaracteristic($titre,$content)
    {
        extract($this->post);

        $this->CaracteristicTitle(utf8_decode($titre));
        $this->CaracteristicContent(utf8_decode($content));
    }
}

$pdf = new PDF();
//var_dump($_SESSION);
$pdf->setPost($_SESSION);
$pdf->AddPage();
$pdf->SetFont('Arial','',12);
$pdf->SetTitle('Curriculum Vitae');
$pdf->SetRightMargin(40);
$pdf->Text(130,10,utf8_decode("Nom: ".$_SESSION['nom']));
$pdf->Ln();
$pdf->Text(130,20,utf8_decode("Prenom: ".$_SESSION['prenom']));
$pdf->Ln();
$pdf->Text(130,30,"Age: ".$_SESSION['age']);
$pdf->Ln();
$pdf->Text(130,40,utf8_decode("N° Téléphone: ".$_SESSION['tel']));
$pdf->Ln();
$pdf->Text(130,50,utf8_decode("Adresse: ".$_SESSION['adresse']));
$pdf->Ln();
$pdf->Text(130,60,"Mail: ".$_SESSION['mail']);
$pdf->Ln();
$pdf->Write(30,' ');
$pdf->Ln();
$pdf->Image('img/profil.jpg',10,12,30,0,'','');
$pdf->Ln();
$pdf->AddCaracteristic("Formation","".$_SESSION['job']);
$pdf->AddCaracteristic("Compétences","".$_SESSION['skills']);
$pdf->AddCaracteristic("Langues","".$_SESSION['lang']);
$pdf->AddCaracteristic("Expériences Professionels","".$_SESSION['exp']);
$pdf->Output();
?>