<?php   
    require("fpdf185/fpdf.php");
    include("creation_variable.php");
    include("conv_nb_lettre.php");
    $font_size=11;
    $font_family='Arial';
    
    //CREATION PDF
    $pdf = new FPDF();
    $pdf->AddPage();
    $bordure=0;

    //ENTETE1 PDF
    $pdf->SetFont($font_family,'',$font_size);
    $pdf->Ln(15);
    $pdf->Cell(0,10,"PROCES VERBAL",$bordure,1,'C');
    $pdf->Cell(0,5,'SOUTENANCE DE FIN D\'ETUDES POUR L\'OBTENTION DU DIPLOME DE LICENCE',0,1,'C');
    $pdf->Cell(0,5,"PROFESSIONNELLE",$bordure,1,'C');

    //ENTETE2 PDF
    $pdf->SetFont($font_family,'B',$font_size);
    $pdf->Cell(93,10,"Mention :",$bordure,0,'R');
    $pdf->SetFont($font_family,'',$font_size);
    $pdf->Cell(0,10,"Informatique",$bordure,1,'L');
    $pdf->SetFont($font_family,'B',$font_size);
    $pdf->Cell($cell_width,10,"Parcours :",$bordure,0,'R');
    $pdf->SetFont($font_family,'',$font_size);
    $pdf->Cell(93,10,$parcours,$bordure,1,'L');

    //CORPS PDF
    $pdf->SetLeftMargin(30);
    $pdf->Cell(14,10,"Mr/Mlle",$bordure,0,'C');
    $pdf->Cell(150,10,$nom." ".$prenom,$bordure,1,'L');
    $pdf->Cell(0,5,'a soutenu publiquement son memoire de fin d\'etudes pour l\'obtention du diplome Licence',$bordure,1,'L');
    $pdf->Cell(46,5,"professionnelle",$bordure,1,'L');
    $pdf->Ln(3);
    $pdf->Cell(0,5,'Apres la deliberation, la commission des membres du Jury a attribue la note de '.$note.'/20('.$LETTRE[$note],$bordure,1,'L');
    $pdf->Cell(45,5,"sur vingt)",$bordure,1,'L');
    $pdf->Ln(3);
    $pdf->SetFont($font_family,'U',$font_size);
    $pdf->Cell(45,10,"Membres du  jury",$bordure,1,'L');
    $pdf->SetFont($font_family,'B',$font_size);
    $pdf->Cell(22,10,utf8_decode("Président : "),$bordure,0,'L');
    $pdf->SetFont($font_family,'',$font_size);
    $pdf->Cell(150,10,utf8_decode($president),$bordure,1,'L');
    $pdf->SetFont($font_family,'B',$font_size);
    $pdf->Cell(28,10,"Examinateur : ",$bordure,0,'L');
    $pdf->SetFont($font_family,'',$font_size);
    $pdf->Cell(150,10,utf8_decode($examinateur),$bordure,1,'L');
    $pdf->SetFont($font_family,'B',$font_size);
    $pdf->Cell(28,10,"Rapporteurs : ",$bordure,0,'L');
    $pdf->SetFont($font_family,'',$font_size);
    $pdf->Cell(150,10,utf8_decode($rapporteur_int),$bordure,1,'L');
    $pdf->SetLeftMargin(58);
    $pdf->Cell(150,10,utf8_decode($rapporteur_ext),$bordure,1,'L');
    $pdf->Output();
?>