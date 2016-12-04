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

        extract($this->post);

        // Arial gras 15
        $this->SetFont('Arial','B',15);
        // Calcul de la largeur du titre et positionnement
        $w = $this->GetStringWidth($titre)+6;
        $this->SetX((210-$w)/2);
        // Couleurs du cadre, du fond et du texte
        $this->SetDrawColor(0,80,180);
        $this->SetFillColor(230,230,0);
        $this->SetTextColor(220,50,50);
        // Epaisseur du cadre (1 mm)
        $this->SetLineWidth(1);
        // Titre
        $this->Cell($w,9,$titre,1,1,'C',true);
        // Saut de ligne
        $this->Ln(10);
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
        // Numéro de page
        $this->Cell(0,10,'Page '.$this->PageNo(),0,0,'C');
    }
}

$pdf = new PDF();
//var_dump($_SESSION);
$pdf->setPost($_SESSION);
$titre = 'Curriculum Vitae';
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->SetTitle($titre);
$pdf->Write(10,"votre nom est :".$_SESSION['prenom']);
$pdf->Output();
?>
