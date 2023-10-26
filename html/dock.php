
<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" 
    crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="shortcut icon" type="x-icon" href="dna-svgrepo-com.svg">
    <title>Home</title>
  
</head>

<body>
       
<div class="Docking-header mx-auto">
        <div class=" center content-between ">
            <div  style="margin-top:1rem;">
                <h1 style="color: white;">Moleculer Docking System</h1>
                <h6 style="color: white;">Virtual Screening Server</h6>
            </div>
            <div style="display: flex;">
            <img class="align-self-center" src="dna-svgrepo-com.svg" height="65px" alt="">
        </div>
        </div>
</div>
<div>
<nav class="navbar navbar-expand-lg bg-grad center">
      <div class="container-fluid">
    
        <div class="collapse navbar-collapse " id="navbarSupportedContent" >
          <ul class="navbar-nav me-auto">
            <li class="nav-item">
              <a class="nav-link active me-5" aria-current="page" href="home.html" style="color: white;"><h5>Home</h5></a>
            </li>
            <li class="nav-item">
              <a class="nav-link me-5" href="receptorbased.html" style="color: white;"><h5>Receptor-based Screen</h5></a>
            </li>
            <li class="nav-item">
              <a class="nav-link me-5" href="ligandbased.html" style="color: white;"><h5>Ligand-based Screen</h5></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="help.html" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: white;">
               <h5> Help</h5>
              </a>
     
            </li>
   
          </ul>
          <ul class="navbar-nav">
              <li class="nav-item">
                  <a  class="nav-link me-5" href="register.php" style="color: white;"> <h5>Register</h5></a>
              </li>
              <li class="nav-item">
                  <a  class="nav-link" href="login.html" style="color: white;"> <h5>Login</h5> </a>
              </li>
          </ul>

        </div>
      </div>
  </nav>
  </div>
<div class="container">
        <div id="result-menu" class="mt-4">
            <!-- <ul class="list-group" style="display: inline;">
                <a href="#3d_view" id="label-view" data-toggle="list" role="tab"><span class="menu-label" style="border-radius: 0;">3D view</span></a><a href="#summary" id="label-summary" data-toggle="list" role="tab"><span class="menu-label" style="border-radius: 0;">summary</span></a>
            </ul> -->
            <ul class="list-group list-group-horizontal" style="display: table;text-align:center">
                <li class="list-group-item pl-0" id="li-view" style="padding: 0.2em 0.6em;background-color: #337ab7;" onclick="show_view()">
                    <a href="#3d_view" id="label-view" data-toggle="list" role="tab" style="color:#fff;">
                        <small><strong>&nbsp;&nbsp;3D view</strong></small>
                    </a>
                </li>
                <li class="list-group-item pl-0" id="li-summary" style="padding: 0.2rem 0.6em;background-color: #727b84;" onclick="show_summary()">
                    <a href="#summary" id="label-summary" data-toggle="list" role="tab" style="color:#fff;">
                        <small><strong>&nbsp;&nbsp;Summary</strong></small>
                    </a>
                </li>
            </ul>
        </div>
        <div class="tab-content pr-2">
            <div class="tab-pane fade show active mt-4" id="3d_view" role="tabpanel" aria-labelledby="label-view"> <!-- 3D-VIEW -->
                <div class="d-flex flex-wrap justify-content-center mb-1">
                    <h4 id="receptor_name" class="font-weight-bold text-center">Receptor-based Screen Result —— 3LBJ_PROTEIN</h4>
                </div> 
                                <div class="card" style="width:100%; overflow: auto"> 
                    <table class="table text-center small table-bordered mb-0" style="border-collapse:collapse;" id="drugs_table_1">
                    <style>
                        tr td:first-child{font-weight:600;}
                    </style>
                        <tbody><tr><td>ID</td><td id="DB12978_out.mol2" style="color:rgb(0,123,255);" onclick="showLigand(this)" class="table-success" name="ligand">DB12978</td><td id="DB13520_out.mol2" style="color:rgb(0,123,255);" onclick="showLigand(this)" name="ligand">DB13520</td><td id="DB11942_out.mol2" style="color:rgb(0,123,255);" onclick="showLigand(this)" name="ligand">DB11942</td><td id="DB00838_out.mol2" style="color:rgb(0,123,255);" onclick="showLigand(this)" name="ligand">DB00838</td><td id="DB08912_out.mol2" style="color:rgb(0,123,255);" onclick="showLigand(this)" name="ligand">DB08912</td><td id="DB00223_out.mol2" style="color:rgb(0,123,255);" onclick="showLigand(this)" name="ligand">DB00223</td><td id="DB12952_out.mol2" style="color:rgb(0,123,255);" onclick="showLigand(this)" name="ligand">DB12952</td><td id="DB00894_out.mol2" style="color:rgb(0,123,255);" onclick="showLigand(this)" name="ligand">DB00894</td><td id="DB01591_out.mol2" style="color:rgb(0,123,255);" onclick="showLigand(this)" name="ligand">DB01591</td></tr><tr><td>Name</td><td>Pexidartinib</td><td>Metergoline</td><td>Selinexor</td><td>Clocortolone</td><td>Dabrafenib</td><td>Diflorasone</td><td>Methylprednisone</td><td>Testolactone</td><td>Solifenacin</td></tr><tr><td>Score</td><td id="DB12978-score">-8.2</td><td id="DB13520-score">-7.6</td><td id="DB11942-score">-7.6</td><td id="DB00838-score">-7.5</td><td id="DB08912-score">-7.5</td><td id="DB00223-score">-7.4</td><td id="DB12952-score">-7.4</td><td id="DB00894-score">-7.4</td><td id="DB01591-score">-7.0</td></tr> 
                    </tbody></table>

                </div>
                <div class="form-text text-danger text-center" id="limit-info" style="display: none">
                    <small>
                        Up to 5 ligands can be displayed. To display the other ligands, please unhighlight the selected one.
                    </small>
                </div>

                <div class="pt-2" id="3dmol"> 
                    <div class="card border-0" id="ngl-ui">
                        <div class="card" style="width:80%; margin-left:10%;">
                            <div id="viewport" style="width: 100%; height: 430px; overflow: hidden;"><div style="position: relative;"><canvas width="1100" height="537" tabindex="-1" style="width: 880px; height: 430px; background-color: rgb(255, 255, 255); touch-action: none; outline: none;"></canvas></div><div style="display: none; position: fixed; z-index: 1000000; pointer-events: none; background-color: rgba(0, 0, 0, 0.6); color: lightgrey; padding: 8px; font-family: sans-serif;"></div></div>
                            <div id="ngl_status" style="visibility:hidden; color:black; font-size:0.8rem">nothing</div> 
                        </div>
                        
                        <!-- ngl menu start -->
                        <div class="d-flex align-items-center justify-content-center">
                          <div class="btn-group mt-2 mb-1" id="btn-group">
                            <button type="button" class="btn btn-outline-secondary btn-sm" onclick="center()">
                              Center
                            </button>
                            <button type="button" class="btn btn-outline-secondary btn-sm" onclick="fullscreen()">
                              Fullscreen
                            </button>
                            <div class="btn-group" role="group"> <!-- Style Ligand -->
                              <button id="representationLigand" type="button" class="btn btn-outline-secondary btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Style Ligand
                              </button>
                              <div class="dropdown-menu p-0" aria-labelledby="representationLigand">
                                <button class="dropdown-item active btn-sm" type="button" onclick="repLigand(this)" value="ball+stick">Ball&amp;Stick</button>
                                <button class="dropdown-item btn-sm" type="button" onclick="repLigand(this)" value="spacefill">Spacefill</button>
                                <button class="dropdown-item btn-sm" type="button" onclick="repLigand(this)" value="licorice">Licorice</button>
                                <button class="dropdown-item btn-sm" type="button" onclick="repLigand(this)" value="surface">Surface</button>
                                <button class="dropdown-item btn-sm" type="button" onclick="hydrogen()" value="existed" id="hydrogen">
                                    Hydrogen
                                </button>
                              </div>
                            </div>
                            <div class="btn-group" role="group"> <!-- Color Ligand -->
                              <button id="colorLigand" type="button" class="btn btn-outline-secondary btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Color Ligand
                              </button>
                              <div class="dropdown-menu p-0" aria-labelledby="colorLigand">
                                <button class="dropdown-item active btn-sm" type="button" onclick="colorLigand(this)" value="element">By Element</button>
                                <button class="dropdown-item btn-sm" type="button" onclick="colorLigand(this)" value="ligandId">By Ligand</button>
                                <button class="dropdown-item btn-sm" type="button" onclick="colorLigand(this)" value="uniform">Uniform</button>
                              </div>
                            </div>
                            <div class="btn-group" role="group"> <!-- Style Receptor -->
                              <button id="representationReceptor" type="button" class="btn btn-outline-secondary btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Style Receptor
                              </button>
                              <div class="dropdown-menu p-0" aria-labelledby="representationReceptor">
                                <button class="dropdown-item btn-sm" type="button" onclick="repReceptor(this)" value="cartoon">Cartoon</button>
                                <button class="dropdown-item btn-sm" type="button" onclick="repReceptor(this)" value="backbone">Backbone</button>
                                <button class="dropdown-item btn-sm" type="button" onclick="repReceptor(this)" value="spacefill">Spacefill</button>
                                <button class="dropdown-item btn-sm" type="button" onclick="repReceptor(this)" value="licorice">Licorice</button>
                                <button class="dropdown-item active btn-sm" type="button" onclick="repReceptor(this)" value="surface">Surface</button>   
                                <div class="dropdown-divider m-0"></div>
                                <button class="dropdown-item btn-sm" type="button" style="color:#6c757d" onclick="hideReceptor(this)">Hide Receptor
                                </button>
                              </div>
                            </div>
                            <div class="btn-group" role="group"> <!-- Color Receptor -->
                              <button id="colorReceptor" type="button" class="btn btn-outline-secondary btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Color Receptor
                              </button>
                              <div class="dropdown-menu p-0" aria-labelledby="colorReceptor">
                                <button class="dropdown-item active btn-sm" type="button" onclick="colorReceptor(this)" value="chainid">By Chain</button>
                                <button class="dropdown-item btn-sm" type="button" onclick="colorReceptor(this)" value="sstruc">By Secondary Structure</button>
                                <button class="dropdown-item btn-sm" type="button" onclick="colorReceptor(this)" value="hydrophobicity">By Hydrophobicity</button>
                                <button class="dropdown-item btn-sm" type="button" onclick="colorReceptor(this)" value="element">By Element</button>
                                <button class="dropdown-item btn-sm" type="button" onclick="colorReceptor(this)" value="bfactor">By B-Factor</button>
                                <button class="dropdown-item btn-sm" type="button" onclick="colorReceptor(this)" value="uniform">Uniform</button>
                              </div>
                            </div>
                            <button type="button" class="btn btn-link btn-sm pr-0" id="btn_settings">
                                <span class="glyphicon glyphicon-cog"></span>
                            </button>
                            <button type="button" class="btn btn-link btn-sm pr-0" id="btn_savePic">
                                <span class="glyphicon glyphicon-camera"></span>
                            </button>
                          </div>
                        </div><!-- ngl menu end -->

                        <!-- setting start -->
                        <!-- setting end -->
                        <!-- savePic start -->
                         <!-- savePic end -->

                    </div> <!-- card --> 
                </div>
                <p class="font-weight-bold mt-3" style="margin-bottom: 0.5em;">
                    Selected drugs' information:
                </p>
                <div class="card mb-3" id="div-table-info" style="border:1px solid #b3b7bb;"> 
                    <table class="mb-0 small" id="drugs_table_2" style="text-align:center;width:100%;" cellpadding="5">
                        <style>
                            .align-right{text-align:right;width:22%;}
                            .border-right{border-right:1px solid #b3b7bb;}
                            .border-bottom{border-bottom:1px solid #b3b7bb;}
                            #drugs_table_2 thead{font-weight:600;}
                        </style>
                        <thead>
                            <tr class="border-bottom table-secondary">
                                <td class="border-right"></td>
                                <td id="id-1" class="drugs_table_2_td">DB12978</td>
                                <td id="id-2" class="drugs_table_2_td"></td>
                                <td id="id-3" class="drugs_table_2_td"></td>
                                <td id="id-4" class="drugs_table_2_td"></td>
                                <td id="id-5" class="drugs_table_2_td"></td>
                            </tr>
                        </thead>
                        
                        <tbody>
                            <style>
                                tr td:first-child{font-weight:600;}

                            </style>
                            <tr class="border-bottom">
                                <td class="align-right border-right">
                                    2D image:<br>
                                    <small>
                                        ( Click on the picture to enlarge )
                                    </small>
                                </td>
                                <td>
                                    <div class="over"></div><!--背景层-->
                                    <div class="amplifyImg">
                                    <img id="img-1" class="drugs_table_2_img" src="../lib/svg/fdaapp_new_svg/DB12978.svg" style="width: 150px; height: 150px;">
                                    </div>
                                </td>
                                <td>
                                    <div class="over"></div><!--背景层-->
                                    <div class="amplifyImg">
                                    <img id="img-2" class="drugs_table_2_img" src="" style="width: 0px; height: 0px;">
                                    </div>
                                </td>
                                <td>
                                    <div class="over"></div><!--背景层-->
                                    <div class="amplifyImg">
                                    <img id="img-3" class="drugs_table_2_img" src="" style="width: 0px; height: 0px;">
                                    </div>
                                </td>
                                <td>
                                    <div class="over"></div><!--背景层-->
                                    <div class="amplifyImg">
                                    <img id="img-4" class="drugs_table_2_img" src="" style="width: 0px; height: 0px;">
                                    </div>
                                </td>
                                <td>
                                    <div class="over"></div><!--背景层-->
                                    <div class="amplifyImg">
                                    <img id="img-5" class="drugs_table_2_img" src="" style="width: 0px; height: 0px;">
                                    </div>
                                </td>
                            </tr>
                            <tr class="border-bottom table-secondary">
                                <td class="align-right border-right">
                                    Molecular Weight:
                                </td>
                                <td id="mw-1" class="drugs_table_2_td">417.8</td>
                                <td id="mw-2" class="drugs_table_2_td"></td>
                                <td id="mw-3" class="drugs_table_2_td"></td>
                                <td id="mw-4" class="drugs_table_2_td"></td>
                                <td id="mw-5" class="drugs_table_2_td"></td>
                            </tr>
                            <tr class="border-bottom">
                                <td class="align-right border-right">
                                    No. of Hydrogen Bond Donors:
                                </td>
                                <td id="HBD-1" class="drugs_table_2_td">1</td>
                                <td id="HBD-2" class="drugs_table_2_td"></td>
                                <td id="HBD-3" class="drugs_table_2_td"></td>
                                <td id="HBD-4" class="drugs_table_2_td"></td>
                                <td id="HBD-5" class="drugs_table_2_td"></td>
                            </tr>
                            <tr class="border-bottom table-secondary">
                                <td class="align-right border-right">
                                    No. of Hydrogen Bond Acceptors:
                                </td>
                                <td id="HBA-1" class="drugs_table_2_td">3</td>
                                <td id="HBA-2" class="drugs_table_2_td"></td>
                                <td id="HBA-3" class="drugs_table_2_td"></td>
                                <td id="HBA-4" class="drugs_table_2_td"></td>
                                <td id="HBA-5" class="drugs_table_2_td"></td>
                            </tr>
                            <tr class="border-bottom">
                                <td class="align-right border-right">
                                    No. of Rotatable Bonds:<br>
                                    <small>
                                        ( When the rotatable bonds are relatively large, the docking result may be inaccurate. )
                                    </small>
                                </td>
                                <td id="RB-1" class="drugs_table_2_td">5</td>
                                <td id="RB-2" class="drugs_table_2_td"></td>
                                <td id="RB-3" class="drugs_table_2_td"></td>
                                <td id="RB-4" class="drugs_table_2_td"></td>
                                <td id="RB-5" class="drugs_table_2_td"></td>
                            </tr>
                            <tr class="border-bottom table-secondary">
                                <td class="align-right border-right">
                                    No. of Nitrogen and Oxygen Atoms:
                                </td>
                                <td id="NOA-1" class="drugs_table_2_td">5</td>
                                <td id="NOA-2" class="drugs_table_2_td"></td>
                                <td id="NOA-3" class="drugs_table_2_td"></td>
                                <td id="NOA-4" class="drugs_table_2_td"></td>
                                <td id="NOA-5" class="drugs_table_2_td"></td>
                            </tr>
                            <tr class="border-bottom">
                                <td class="align-right border-right">
                                    No. of Rings:
                                </td>
                                <td id="R-1" class="drugs_table_2_td">4</td>
                                <td id="R-2" class="drugs_table_2_td"></td>
                                <td id="R-3" class="drugs_table_2_td"></td>
                                <td id="R-4" class="drugs_table_2_td"></td>
                                <td id="R-5" class="drugs_table_2_td"></td>
                            </tr>
                            <tr class="table-secondary">
                                <td class="align-right border-right">
                                    logP:
                                </td>
                                <td id="log-1" class="drugs_table_2_td"> 4.4</td>
                                <td id="log-2" class="drugs_table_2_td"></td>
                                <td id="log-3" class="drugs_table_2_td"></td>
                                <td id="log-4" class="drugs_table_2_td"></td>
                                <td id="log-5" class="drugs_table_2_td"></td>
                            </tr>
                            <tr>
                                <td class="align-right border-right">
                                    targets:
                                </td>
                                <td id="target-1" class="drugs_table_2_td text-left text-justify">Macrophage colony-stimulating factor 1 receptor(<a target="_blank" title="Link to Uniprot" href="http://www.uniprot.org/uniprot/P07333">P07333</a><a>), Mast/stem cell growth factor receptor Kit(</a><a target="_blank" title="Link to Uniprot" href="http://www.uniprot.org/uniprot/P10721">P10721</a><a>), Receptor-type tyrosine-protein kinase FLT3(</a><a target="_blank" title="Link to Uniprot" href="http://www.uniprot.org/uniprot/P36888">P36888</a><a>), Platelet-derived growth factor receptor beta(</a><a target="_blank" title="Link to Uniprot" href="http://www.uniprot.org/uniprot/P09619">P09619</a><a>)</a></td>
                                <td id="target-2" class="drugs_table_2_td text-left text-justify"></td>
                                <td id="target-3" class="drugs_table_2_td text-left text-justify"></td>
                                <td id="target-4" class="drugs_table_2_td text-left text-justify"></td>
                                <td id="target-5" class="drugs_table_2_td text-left text-justify"></td>
                            </tr>

                            <tr class="table-secondary">
                                        <td class="align-right border-right">
                                            Pharmacodynamics:
                                        </td>
                                        <td id="pharm-1" class="drugs_table_2_td text-left text-justify">Pexidartinib works by suppressing the growth of tenosynovial giant cell tumors. In clinical trials comprising of patients with symptomatic tenosynovial giant cell tumor, pexidartinib had a higher overall response rate, characterized by improved patient symptoms and functional outcomes, compared to placebo.2 Pexidartinib works by inhibiting the activation and signaling of tumor-permissive cytokines and receptor tyrosine kinases that play a central role in tumor cell proliferation and survival.3</td>
                                        <td id="pharm-2" class="drugs_table_2_td text-left text-justify"></td>
                                        <td id="pharm-3" class="drugs_table_2_td text-left text-justify"></td>
                                        <td id="pharm-4" class="drugs_table_2_td text-left text-justify"></td>
                                        <td id="pharm-5" class="drugs_table_2_td text-left text-justify"></td>
                                    </tr><tr>
                                        <td class="align-right border-right">
                                            External links:
                                        </td>
                                        <td id="link-1" class="drugs_table_2_td">DrugBank: <a target="_blank" title="Link to DrugBank" href="https:/go.drugbank.com/drugs/DB12978">DB12978</a><a> <br>TTD: </a><a target="_blank" title="Link to therapeutic target database" href="http://db.idrblab.net/ttd/data/drug/details/D09TAB">D09TAB</a><a></a></td>
                                        <td id="link-2" class="drugs_table_2_td"></td>
                                        <td id="link-3" class="drugs_table_2_td"></td>
                                        <td id="link-4" class="drugs_table_2_td"></td>
                                        <td id="link-5" class="drugs_table_2_td"></td>
                                    </tr>                        </tbody>
                    </table>
                </div>
            </div>

            <div class="tab-pane fade mt-4" id="summary" role="tabpanel" aria-labelledby="label-summary"><!-- Virtual Screen Summary -->
                <div class="d-flex flex-wrap justify-content-center mb-3">
                    <h4 id="receptor_name" class="font-weight-bold text-center" style="display:inline;">
                        Receptor-based Screen Summary
                    </h4>
                </div> 
                
                <div>     
                    <p class="text-right mb-1"><a src="#" href="../example/20220719010703/screen/3lbj_protein.pdb.tar.gz" id="download">Download the Receptor-based Screen result.</a></p>     
                    <div id="drug-table_wrapper" class="dataTables_wrapper no-footer"><table class="table table-light font-weight-light table-striped display dataTable no-footer" id="drug-table" role="grid">
                        <thead>
                            <tr role="row"><th class="sorting" tabindex="0" aria-controls="drug-table" rowspan="1" colspan="1" aria-label="ID: activate to sort column ascending" style="width: 0px;">ID</th><th class="sorting" tabindex="0" aria-controls="drug-table" rowspan="1" colspan="1" aria-label="Name: activate to sort column ascending" style="width: 0px;">Name</th><th class="sorting" tabindex="0" aria-controls="drug-table" rowspan="1" colspan="1" aria-label="Formula: activate to sort column ascending" style="width: 0px;">Formula</th><th class="sorting" tabindex="0" aria-controls="drug-table" rowspan="1" colspan="1" aria-label="CAS: activate to sort column ascending" style="width: 0px;">CAS</th><th class="sorting_asc" tabindex="0" aria-controls="drug-table" rowspan="1" colspan="1" aria-sort="ascending" aria-label="
                                    
                                    Score
                                : activate to sort column descending" style="width: 0px;">
                                    <a href="#" data-toggle="tooltip" title="AutoDock Vina affinity (kcal/mol)." style="color:rgb(33, 37, 41);text-decoration: underline dashed;">
                                    Score</a>
                                </th><th class="sorting" tabindex="0" aria-controls="drug-table" rowspan="1" colspan="1" aria-label="
                                    
                                    Xscore
                                : activate to sort column ascending" style="width: 0px;">
                                    <a href="#" data-toggle="tooltip" title="X-Score bbinding energy (kcal/mol)." style="color:rgb(33, 37, 41);text-decoration: underline dashed;">
                                    Xscore</a>
                                </th><th class="sorting" tabindex="0" aria-controls="drug-table" rowspan="1" colspan="1" aria-label="
                                    
                                    MW
                                : activate to sort column ascending" style="width: 0px;">
                                    <a href="#" data-toggle="tooltip" title="Molecular weight. The molecular weight here is different form that on the 3D-view page for the reason that the latter removed all but the largest contiguous fragment for docking." style="color:rgb(33, 37, 41);text-decoration: underline dashed;">
                                    MW</a>
                                </th><th class="sorting" tabindex="0" aria-controls="drug-table" rowspan="1" colspan="1" aria-label="HBD: activate to sort column ascending" style="width: 0px;">HBD</th><th class="sorting" tabindex="0" aria-controls="drug-table" rowspan="1" colspan="1" aria-label="HBA: activate to sort column ascending" style="width: 0px;">HBA</th><th class="sorting" tabindex="0" aria-controls="drug-table" rowspan="1" colspan="1" aria-label="RB: activate to sort column ascending" style="width: 0px;">RB</th><th class="sorting" tabindex="0" aria-controls="drug-table" rowspan="1" colspan="1" aria-label="NOA: activate to sort column ascending" style="width: 0px;">NOA</th><th class="sorting" tabindex="0" aria-controls="drug-table" rowspan="1" colspan="1" aria-label="Rings: activate to sort column ascending" style="width: 0px;">Rings</th><th class="sorting" tabindex="0" aria-controls="drug-table" rowspan="1" colspan="1" aria-label="LogP: activate to sort column ascending" style="width: 0px;">LogP</th></tr>
                        </thead>
                        <tbody>
                                    
                        <tr role="row" class="odd"><td>DB12978</td><td>Pexidartinib</td><td>C<sub>20</sub>H<sub>15</sub>ClF<sub>3</sub>N<sub>5</sub></td><td>1029044-16-3</td><td class="sorting_1">-8.2</td><td>-8.31</td><td>417.82</td><td>1</td><td>3</td><td>5</td><td>5</td><td>4</td><td> 4.4</td></tr><tr role="row" class="even"><td>DB13520</td><td>Metergoline</td><td>C<sub>25</sub>H<sub>29</sub>N<sub>3</sub>O<sub>2</sub></td><td>17692-51-2</td><td class="sorting_1">-7.6</td><td>-8.08</td><td>403.526</td><td>1</td><td>1</td><td>6</td><td>5</td><td>5</td><td> 3.7</td></tr><tr role="row" class="odd"><td>DB11942</td><td>Selinexor</td><td>C<sub>17</sub>H<sub>11</sub>F<sub>6</sub>N<sub>7</sub>O</td><td>1393477-72-9</td><td class="sorting_1">-7.6</td><td>-8.24</td><td>443.313</td><td>2</td><td>5</td><td>6</td><td>8</td><td>3</td><td> 3.0</td></tr><tr role="row" class="even"><td>DB00838</td><td>Clocortolone</td><td>C<sub>22</sub>H<sub>28</sub>ClFO<sub>4</sub></td><td>4828-27-7</td><td class="sorting_1">-7.5</td><td>-8.43</td><td>410.907</td><td>2</td><td>4</td><td>4</td><td>4</td><td>4</td><td> 2.6</td></tr><tr role="row" class="odd"><td>DB08912</td><td>Dabrafenib</td><td>C<sub>23</sub>H<sub>20</sub>F<sub>3</sub>N<sub>5</sub>O<sub>2</sub>S<sub>2</sub></td><td>1195765-45-7</td><td class="sorting_1">-7.5</td><td>-8.77</td><td>519.562</td><td>2</td><td>5</td><td>6</td><td>7</td><td>4</td><td> 4.7</td></tr><tr role="row" class="even"><td>DB00223</td><td>Diflorasone</td><td>C<sub>22</sub>H<sub>28</sub>F<sub>2</sub>O<sub>5</sub></td><td>2557-49-5</td><td class="sorting_1">-7.4</td><td>-8.38</td><td>410.4515</td><td>3</td><td>5</td><td>5</td><td>5</td><td>4</td><td> 1.9</td></tr><tr role="row" class="odd"><td>DB12952</td><td>Methylprednisone</td><td>C<sub>22</sub>H<sub>28</sub>O<sub>5</sub></td><td>91523-05-6</td><td class="sorting_1">-7.4</td><td>-8.39</td><td>372.461</td><td>2</td><td>5</td><td>4</td><td>5</td><td>4</td><td> 1.8</td></tr><tr role="row" class="even"><td>DB00894</td><td>Testolactone</td><td>C<sub>19</sub>H<sub>24</sub>O<sub>3</sub></td><td>968-93-4</td><td class="sorting_1">-7.4</td><td>-8.28</td><td>300.3921</td><td>0</td><td>2</td><td>0</td><td>3</td><td>4</td><td> 3.0</td></tr><tr role="row" class="odd"><td>DB01591</td><td>Solifenacin</td><td>C<sub>23</sub>H<sub>26</sub>N<sub>2</sub>O<sub>2</sub></td><td>242478-37-1</td><td class="sorting_1">-7.0</td><td>-8.40</td><td>362.473</td><td>0</td><td>1</td><td>4</td><td>4</td><td>5</td><td> 3.9</td></tr></tbody>
                    </table></div>
                </div>
            </div>
        </div>
</div>
<div id="result-menu" class="mt-4">
            <!-- <ul class="list-group" style="display: inline;">
                <a href="#3d_view" id="label-view" data-toggle="list" role="tab"><span class="menu-label" style="border-radius: 0;">3D view</span></a><a href="#summary" id="label-summary" data-toggle="list" role="tab"><span class="menu-label" style="border-radius: 0;">summary</span></a>
            </ul> -->
            <ul class="list-group list-group-horizontal" style="display: table;text-align:center">
                <li class="list-group-item pl-0" id="li-view" style="padding: 0.2em 0.6em;background-color: #337ab7;" onclick="show_view()">
                    <a href="#3d_view" id="label-view" data-toggle="list" role="tab" style="color:#fff;">
                        <small><strong>&nbsp;&nbsp;3D view</strong></small>
                    </a>
                </li>
                <li class="list-group-item pl-0" id="li-summary" style="padding: 0.2rem 0.6em;background-color: #727b84;" onclick="show_summary()">
                    <a href="#summary" id="label-summary" data-toggle="list" role="tab" style="color:#fff;">
                        <small><strong>&nbsp;&nbsp;Summary</strong></small>
                    </a>
                </li>
            </ul>
</div>
<div class="tab-content pr-2">
            <div class="tab-pane fade show active mt-4" id="3d_view" role="tabpanel" aria-labelledby="label-view"> <!-- 3D-VIEW -->
                <div class="d-flex flex-wrap justify-content-center mb-1">
                    <h4 id="receptor_name" class="font-weight-bold text-center">Receptor-based Screen Result —— 3LBJ_PROTEIN</h4>
                </div> 
                                <div class="card" style="width:100%; overflow: auto"> 
                    <table class="table text-center small table-bordered mb-0" style="border-collapse:collapse;" id="drugs_table_1">
                    <style>
                        tr td:first-child{font-weight:600;}
                    </style>
                        <tbody><tr><td>ID</td><td id="DB12978_out.mol2" style="color:rgb(0,123,255);" onclick="showLigand(this)" class="table-success" name="ligand">DB12978</td><td id="DB13520_out.mol2" style="color:rgb(0,123,255);" onclick="showLigand(this)" name="ligand">DB13520</td><td id="DB11942_out.mol2" style="color:rgb(0,123,255);" onclick="showLigand(this)" name="ligand">DB11942</td><td id="DB00838_out.mol2" style="color:rgb(0,123,255);" onclick="showLigand(this)" name="ligand">DB00838</td><td id="DB08912_out.mol2" style="color:rgb(0,123,255);" onclick="showLigand(this)" name="ligand">DB08912</td><td id="DB00223_out.mol2" style="color:rgb(0,123,255);" onclick="showLigand(this)" name="ligand">DB00223</td><td id="DB12952_out.mol2" style="color:rgb(0,123,255);" onclick="showLigand(this)" name="ligand">DB12952</td><td id="DB00894_out.mol2" style="color:rgb(0,123,255);" onclick="showLigand(this)" name="ligand">DB00894</td><td id="DB01591_out.mol2" style="color:rgb(0,123,255);" onclick="showLigand(this)" name="ligand">DB01591</td></tr><tr><td>Name</td><td>Pexidartinib</td><td>Metergoline</td><td>Selinexor</td><td>Clocortolone</td><td>Dabrafenib</td><td>Diflorasone</td><td>Methylprednisone</td><td>Testolactone</td><td>Solifenacin</td></tr><tr><td>Score</td><td id="DB12978-score">-8.2</td><td id="DB13520-score">-7.6</td><td id="DB11942-score">-7.6</td><td id="DB00838-score">-7.5</td><td id="DB08912-score">-7.5</td><td id="DB00223-score">-7.4</td><td id="DB12952-score">-7.4</td><td id="DB00894-score">-7.4</td><td id="DB01591-score">-7.0</td></tr> 
                    </tbody></table>

                </div>
                <div class="form-text text-danger text-center" id="limit-info" style="display: none">
                    <small>
                        Up to 5 ligands can be displayed. To display the other ligands, please unhighlight the selected one.
                    </small>
                </div>

                <div class="pt-2" id="3dmol"> 
                    <div class="card border-0" id="ngl-ui">
                        <div class="card" style="width:80%; margin-left:10%;">
                            <div id="viewport" style="width: 100%; height: 430px; overflow: hidden;"><div style="position: relative;"><canvas width="1100" height="537" tabindex="-1" style="width: 880px; height: 430px; background-color: rgb(255, 255, 255); touch-action: none; outline: none;"></canvas></div><div style="display: none; position: fixed; z-index: 1000000; pointer-events: none; background-color: rgba(0, 0, 0, 0.6); color: lightgrey; padding: 8px; font-family: sans-serif;"></div></div>
                            <div id="ngl_status" style="visibility:hidden; color:black; font-size:0.8rem">nothing</div> 
                        </div>
                        
                        <!-- ngl menu start -->
                        <div class="d-flex align-items-center justify-content-center">
                          <div class="btn-group mt-2 mb-1" id="btn-group">
                            <button type="button" class="btn btn-outline-secondary btn-sm" onclick="center()">
                              Center
                            </button>
                            <button type="button" class="btn btn-outline-secondary btn-sm" onclick="fullscreen()">
                              Fullscreen
                            </button>
                            <div class="btn-group" role="group"> <!-- Style Ligand -->
                              <button id="representationLigand" type="button" class="btn btn-outline-secondary btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Style Ligand
                              </button>
                              <div class="dropdown-menu p-0" aria-labelledby="representationLigand">
                                <button class="dropdown-item active btn-sm" type="button" onclick="repLigand(this)" value="ball+stick">Ball&amp;Stick</button>
                                <button class="dropdown-item btn-sm" type="button" onclick="repLigand(this)" value="spacefill">Spacefill</button>
                                <button class="dropdown-item btn-sm" type="button" onclick="repLigand(this)" value="licorice">Licorice</button>
                                <button class="dropdown-item btn-sm" type="button" onclick="repLigand(this)" value="surface">Surface</button>
                                <button class="dropdown-item btn-sm" type="button" onclick="hydrogen()" value="existed" id="hydrogen">
                                    Hydrogen
                                </button>
                              </div>
                            </div>
                            <div class="btn-group" role="group"> <!-- Color Ligand -->
                              <button id="colorLigand" type="button" class="btn btn-outline-secondary btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Color Ligand
                              </button>
                              <div class="dropdown-menu p-0" aria-labelledby="colorLigand">
                                <button class="dropdown-item active btn-sm" type="button" onclick="colorLigand(this)" value="element">By Element</button>
                                <button class="dropdown-item btn-sm" type="button" onclick="colorLigand(this)" value="ligandId">By Ligand</button>
                                <button class="dropdown-item btn-sm" type="button" onclick="colorLigand(this)" value="uniform">Uniform</button>
                              </div>
                            </div>
                            <div class="btn-group" role="group"> <!-- Style Receptor -->
                              <button id="representationReceptor" type="button" class="btn btn-outline-secondary btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Style Receptor
                              </button>
                              <div class="dropdown-menu p-0" aria-labelledby="representationReceptor">
                                <button class="dropdown-item btn-sm" type="button" onclick="repReceptor(this)" value="cartoon">Cartoon</button>
                                <button class="dropdown-item btn-sm" type="button" onclick="repReceptor(this)" value="backbone">Backbone</button>
                                <button class="dropdown-item btn-sm" type="button" onclick="repReceptor(this)" value="spacefill">Spacefill</button>
                                <button class="dropdown-item btn-sm" type="button" onclick="repReceptor(this)" value="licorice">Licorice</button>
                                <button class="dropdown-item active btn-sm" type="button" onclick="repReceptor(this)" value="surface">Surface</button>   
                                <div class="dropdown-divider m-0"></div>
                                <button class="dropdown-item btn-sm" type="button" style="color:#6c757d" onclick="hideReceptor(this)">Hide Receptor
                                </button>
                              </div>
                            </div>
                            <div class="btn-group" role="group"> <!-- Color Receptor -->
                              <button id="colorReceptor" type="button" class="btn btn-outline-secondary btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Color Receptor
                              </button>
                              <div class="dropdown-menu p-0" aria-labelledby="colorReceptor">
                                <button class="dropdown-item active btn-sm" type="button" onclick="colorReceptor(this)" value="chainid">By Chain</button>
                                <button class="dropdown-item btn-sm" type="button" onclick="colorReceptor(this)" value="sstruc">By Secondary Structure</button>
                                <button class="dropdown-item btn-sm" type="button" onclick="colorReceptor(this)" value="hydrophobicity">By Hydrophobicity</button>
                                <button class="dropdown-item btn-sm" type="button" onclick="colorReceptor(this)" value="element">By Element</button>
                                <button class="dropdown-item btn-sm" type="button" onclick="colorReceptor(this)" value="bfactor">By B-Factor</button>
                                <button class="dropdown-item btn-sm" type="button" onclick="colorReceptor(this)" value="uniform">Uniform</button>
                              </div>
                            </div>
                            <button type="button" class="btn btn-link btn-sm pr-0" id="btn_settings">
                                <span class="glyphicon glyphicon-cog"></span>
                            </button>
                            <button type="button" class="btn btn-link btn-sm pr-0" id="btn_savePic">
                                <span class="glyphicon glyphicon-camera"></span>
                            </button>
                          </div>
                        </div><!-- ngl menu end -->

                        <!-- setting start -->
                        <!-- setting end -->
                        <!-- savePic start -->
                         <!-- savePic end -->

                    </div> <!-- card --> 
                </div>
                <p class="font-weight-bold mt-3" style="margin-bottom: 0.5em;">
                    Selected drugs' information:
                </p>
                <div class="card mb-3" id="div-table-info" style="border:1px solid #b3b7bb;"> 
                    <table class="mb-0 small" id="drugs_table_2" style="text-align:center;width:100%;" cellpadding="5">
                        <style>
                            .align-right{text-align:right;width:22%;}
                            .border-right{border-right:1px solid #b3b7bb;}
                            .border-bottom{border-bottom:1px solid #b3b7bb;}
                            #drugs_table_2 thead{font-weight:600;}
                        </style>
                        <thead>
                            <tr class="border-bottom table-secondary">
                                <td class="border-right"></td>
                                <td id="id-1" class="drugs_table_2_td">DB12978</td>
                                <td id="id-2" class="drugs_table_2_td"></td>
                                <td id="id-3" class="drugs_table_2_td"></td>
                                <td id="id-4" class="drugs_table_2_td"></td>
                                <td id="id-5" class="drugs_table_2_td"></td>
                            </tr>
                        </thead>
                        
                        <tbody>
                            <style>
                                tr td:first-child{font-weight:600;}

                            </style>
                            <tr class="border-bottom">
                                <td class="align-right border-right">
                                    2D image:<br>
                                    <small>
                                        ( Click on the picture to enlarge )
                                    </small>
                                </td>
                                <td>
                                    <div class="over"></div><!--背景层-->
                                    <div class="amplifyImg">
                                    <img id="img-1" class="drugs_table_2_img" src="../lib/svg/fdaapp_new_svg/DB12978.svg" style="width: 150px; height: 150px;">
                                    </div>
                                </td>
                                <td>
                                    <div class="over"></div><!--背景层-->
                                    <div class="amplifyImg">
                                    <img id="img-2" class="drugs_table_2_img" src="" style="width: 0px; height: 0px;">
                                    </div>
                                </td>
                                <td>
                                    <div class="over"></div><!--背景层-->
                                    <div class="amplifyImg">
                                    <img id="img-3" class="drugs_table_2_img" src="" style="width: 0px; height: 0px;">
                                    </div>
                                </td>
                                <td>
                                    <div class="over"></div><!--背景层-->
                                    <div class="amplifyImg">
                                    <img id="img-4" class="drugs_table_2_img" src="" style="width: 0px; height: 0px;">
                                    </div>
                                </td>
                                <td>
                                    <div class="over"></div><!--背景层-->
                                    <div class="amplifyImg">
                                    <img id="img-5" class="drugs_table_2_img" src="" style="width: 0px; height: 0px;">
                                    </div>
                                </td>
                            </tr>
                            <tr class="border-bottom table-secondary">
                                <td class="align-right border-right">
                                    Molecular Weight:
                                </td>
                                <td id="mw-1" class="drugs_table_2_td">417.8</td>
                                <td id="mw-2" class="drugs_table_2_td"></td>
                                <td id="mw-3" class="drugs_table_2_td"></td>
                                <td id="mw-4" class="drugs_table_2_td"></td>
                                <td id="mw-5" class="drugs_table_2_td"></td>
                            </tr>
                            <tr class="border-bottom">
                                <td class="align-right border-right">
                                    No. of Hydrogen Bond Donors:
                                </td>
                                <td id="HBD-1" class="drugs_table_2_td">1</td>
                                <td id="HBD-2" class="drugs_table_2_td"></td>
                                <td id="HBD-3" class="drugs_table_2_td"></td>
                                <td id="HBD-4" class="drugs_table_2_td"></td>
                                <td id="HBD-5" class="drugs_table_2_td"></td>
                            </tr>
                            <tr class="border-bottom table-secondary">
                                <td class="align-right border-right">
                                    No. of Hydrogen Bond Acceptors:
                                </td>
                                <td id="HBA-1" class="drugs_table_2_td">3</td>
                                <td id="HBA-2" class="drugs_table_2_td"></td>
                                <td id="HBA-3" class="drugs_table_2_td"></td>
                                <td id="HBA-4" class="drugs_table_2_td"></td>
                                <td id="HBA-5" class="drugs_table_2_td"></td>
                            </tr>
                            <tr class="border-bottom">
                                <td class="align-right border-right">
                                    No. of Rotatable Bonds:<br>
                                    <small>
                                        ( When the rotatable bonds are relatively large, the docking result may be inaccurate. )
                                    </small>
                                </td>
                                <td id="RB-1" class="drugs_table_2_td">5</td>
                                <td id="RB-2" class="drugs_table_2_td"></td>
                                <td id="RB-3" class="drugs_table_2_td"></td>
                                <td id="RB-4" class="drugs_table_2_td"></td>
                                <td id="RB-5" class="drugs_table_2_td"></td>
                            </tr>
                            <tr class="border-bottom table-secondary">
                                <td class="align-right border-right">
                                    No. of Nitrogen and Oxygen Atoms:
                                </td>
                                <td id="NOA-1" class="drugs_table_2_td">5</td>
                                <td id="NOA-2" class="drugs_table_2_td"></td>
                                <td id="NOA-3" class="drugs_table_2_td"></td>
                                <td id="NOA-4" class="drugs_table_2_td"></td>
                                <td id="NOA-5" class="drugs_table_2_td"></td>
                            </tr>
                            <tr class="border-bottom">
                                <td class="align-right border-right">
                                    No. of Rings:
                                </td>
                                <td id="R-1" class="drugs_table_2_td">4</td>
                                <td id="R-2" class="drugs_table_2_td"></td>
                                <td id="R-3" class="drugs_table_2_td"></td>
                                <td id="R-4" class="drugs_table_2_td"></td>
                                <td id="R-5" class="drugs_table_2_td"></td>
                            </tr>
                            <tr class="table-secondary">
                                <td class="align-right border-right">
                                    logP:
                                </td>
                                <td id="log-1" class="drugs_table_2_td"> 4.4</td>
                                <td id="log-2" class="drugs_table_2_td"></td>
                                <td id="log-3" class="drugs_table_2_td"></td>
                                <td id="log-4" class="drugs_table_2_td"></td>
                                <td id="log-5" class="drugs_table_2_td"></td>
                            </tr>
                            <tr>
                                <td class="align-right border-right">
                                    targets:
                                </td>
                                <td id="target-1" class="drugs_table_2_td text-left text-justify">Macrophage colony-stimulating factor 1 receptor(<a target="_blank" title="Link to Uniprot" href="http://www.uniprot.org/uniprot/P07333">P07333</a><a>), Mast/stem cell growth factor receptor Kit(</a><a target="_blank" title="Link to Uniprot" href="http://www.uniprot.org/uniprot/P10721">P10721</a><a>), Receptor-type tyrosine-protein kinase FLT3(</a><a target="_blank" title="Link to Uniprot" href="http://www.uniprot.org/uniprot/P36888">P36888</a><a>), Platelet-derived growth factor receptor beta(</a><a target="_blank" title="Link to Uniprot" href="http://www.uniprot.org/uniprot/P09619">P09619</a><a>)</a></td>
                                <td id="target-2" class="drugs_table_2_td text-left text-justify"></td>
                                <td id="target-3" class="drugs_table_2_td text-left text-justify"></td>
                                <td id="target-4" class="drugs_table_2_td text-left text-justify"></td>
                                <td id="target-5" class="drugs_table_2_td text-left text-justify"></td>
                            </tr>

                            <tr class="table-secondary">
                                        <td class="align-right border-right">
                                            Pharmacodynamics:
                                        </td>
                                        <td id="pharm-1" class="drugs_table_2_td text-left text-justify">Pexidartinib works by suppressing the growth of tenosynovial giant cell tumors. In clinical trials comprising of patients with symptomatic tenosynovial giant cell tumor, pexidartinib had a higher overall response rate, characterized by improved patient symptoms and functional outcomes, compared to placebo.2 Pexidartinib works by inhibiting the activation and signaling of tumor-permissive cytokines and receptor tyrosine kinases that play a central role in tumor cell proliferation and survival.3</td>
                                        <td id="pharm-2" class="drugs_table_2_td text-left text-justify"></td>
                                        <td id="pharm-3" class="drugs_table_2_td text-left text-justify"></td>
                                        <td id="pharm-4" class="drugs_table_2_td text-left text-justify"></td>
                                        <td id="pharm-5" class="drugs_table_2_td text-left text-justify"></td>
                                    </tr><tr>
                                        <td class="align-right border-right">
                                            External links:
                                        </td>
                                        <td id="link-1" class="drugs_table_2_td">DrugBank: <a target="_blank" title="Link to DrugBank" href="https:/go.drugbank.com/drugs/DB12978">DB12978</a><a> <br>TTD: </a><a target="_blank" title="Link to therapeutic target database" href="http://db.idrblab.net/ttd/data/drug/details/D09TAB">D09TAB</a><a></a></td>
                                        <td id="link-2" class="drugs_table_2_td"></td>
                                        <td id="link-3" class="drugs_table_2_td"></td>
                                        <td id="link-4" class="drugs_table_2_td"></td>
                                        <td id="link-5" class="drugs_table_2_td"></td>
                                    </tr>                        </tbody>
                    </table>
                </div>
            </div>

            <div class="tab-pane fade mt-4" id="summary" role="tabpanel" aria-labelledby="label-summary"><!-- Virtual Screen Summary -->
                <div class="d-flex flex-wrap justify-content-center mb-3">
                    <h4 id="receptor_name" class="font-weight-bold text-center" style="display:inline;">
                        Receptor-based Screen Summary
                    </h4>
                </div> 
                
                <div>     
                    <p class="text-right mb-1"><a src="#" href="../example/20220719010703/screen/3lbj_protein.pdb.tar.gz" id="download">Download the Receptor-based Screen result.</a></p>     
                    <div id="drug-table_wrapper" class="dataTables_wrapper no-footer"><table class="table table-light font-weight-light table-striped display dataTable no-footer" id="drug-table" role="grid">
                        <thead>
                            <tr role="row"><th class="sorting" tabindex="0" aria-controls="drug-table" rowspan="1" colspan="1" aria-label="ID: activate to sort column ascending" style="width: 0px;">ID</th><th class="sorting" tabindex="0" aria-controls="drug-table" rowspan="1" colspan="1" aria-label="Name: activate to sort column ascending" style="width: 0px;">Name</th><th class="sorting" tabindex="0" aria-controls="drug-table" rowspan="1" colspan="1" aria-label="Formula: activate to sort column ascending" style="width: 0px;">Formula</th><th class="sorting" tabindex="0" aria-controls="drug-table" rowspan="1" colspan="1" aria-label="CAS: activate to sort column ascending" style="width: 0px;">CAS</th><th class="sorting_asc" tabindex="0" aria-controls="drug-table" rowspan="1" colspan="1" aria-sort="ascending" aria-label="
                                    
                                    Score
                                : activate to sort column descending" style="width: 0px;">
                                    <a href="#" data-toggle="tooltip" title="AutoDock Vina affinity (kcal/mol)." style="color:rgb(33, 37, 41);text-decoration: underline dashed;">
                                    Score</a>
                                </th><th class="sorting" tabindex="0" aria-controls="drug-table" rowspan="1" colspan="1" aria-label="
                                    
                                    Xscore
                                : activate to sort column ascending" style="width: 0px;">
                                    <a href="#" data-toggle="tooltip" title="X-Score bbinding energy (kcal/mol)." style="color:rgb(33, 37, 41);text-decoration: underline dashed;">
                                    Xscore</a>
                                </th><th class="sorting" tabindex="0" aria-controls="drug-table" rowspan="1" colspan="1" aria-label="
                                    
                                    MW
                                : activate to sort column ascending" style="width: 0px;">
                                    <a href="#" data-toggle="tooltip" title="Molecular weight. The molecular weight here is different form that on the 3D-view page for the reason that the latter removed all but the largest contiguous fragment for docking." style="color:rgb(33, 37, 41);text-decoration: underline dashed;">
                                    MW</a>
                                </th><th class="sorting" tabindex="0" aria-controls="drug-table" rowspan="1" colspan="1" aria-label="HBD: activate to sort column ascending" style="width: 0px;">HBD</th><th class="sorting" tabindex="0" aria-controls="drug-table" rowspan="1" colspan="1" aria-label="HBA: activate to sort column ascending" style="width: 0px;">HBA</th><th class="sorting" tabindex="0" aria-controls="drug-table" rowspan="1" colspan="1" aria-label="RB: activate to sort column ascending" style="width: 0px;">RB</th><th class="sorting" tabindex="0" aria-controls="drug-table" rowspan="1" colspan="1" aria-label="NOA: activate to sort column ascending" style="width: 0px;">NOA</th><th class="sorting" tabindex="0" aria-controls="drug-table" rowspan="1" colspan="1" aria-label="Rings: activate to sort column ascending" style="width: 0px;">Rings</th><th class="sorting" tabindex="0" aria-controls="drug-table" rowspan="1" colspan="1" aria-label="LogP: activate to sort column ascending" style="width: 0px;">LogP</th></tr>
                        </thead>
                        <tbody>
                                    
                        <tr role="row" class="odd"><td>DB12978</td><td>Pexidartinib</td><td>C<sub>20</sub>H<sub>15</sub>ClF<sub>3</sub>N<sub>5</sub></td><td>1029044-16-3</td><td class="sorting_1">-8.2</td><td>-8.31</td><td>417.82</td><td>1</td><td>3</td><td>5</td><td>5</td><td>4</td><td> 4.4</td></tr><tr role="row" class="even"><td>DB13520</td><td>Metergoline</td><td>C<sub>25</sub>H<sub>29</sub>N<sub>3</sub>O<sub>2</sub></td><td>17692-51-2</td><td class="sorting_1">-7.6</td><td>-8.08</td><td>403.526</td><td>1</td><td>1</td><td>6</td><td>5</td><td>5</td><td> 3.7</td></tr><tr role="row" class="odd"><td>DB11942</td><td>Selinexor</td><td>C<sub>17</sub>H<sub>11</sub>F<sub>6</sub>N<sub>7</sub>O</td><td>1393477-72-9</td><td class="sorting_1">-7.6</td><td>-8.24</td><td>443.313</td><td>2</td><td>5</td><td>6</td><td>8</td><td>3</td><td> 3.0</td></tr><tr role="row" class="even"><td>DB00838</td><td>Clocortolone</td><td>C<sub>22</sub>H<sub>28</sub>ClFO<sub>4</sub></td><td>4828-27-7</td><td class="sorting_1">-7.5</td><td>-8.43</td><td>410.907</td><td>2</td><td>4</td><td>4</td><td>4</td><td>4</td><td> 2.6</td></tr><tr role="row" class="odd"><td>DB08912</td><td>Dabrafenib</td><td>C<sub>23</sub>H<sub>20</sub>F<sub>3</sub>N<sub>5</sub>O<sub>2</sub>S<sub>2</sub></td><td>1195765-45-7</td><td class="sorting_1">-7.5</td><td>-8.77</td><td>519.562</td><td>2</td><td>5</td><td>6</td><td>7</td><td>4</td><td> 4.7</td></tr><tr role="row" class="even"><td>DB00223</td><td>Diflorasone</td><td>C<sub>22</sub>H<sub>28</sub>F<sub>2</sub>O<sub>5</sub></td><td>2557-49-5</td><td class="sorting_1">-7.4</td><td>-8.38</td><td>410.4515</td><td>3</td><td>5</td><td>5</td><td>5</td><td>4</td><td> 1.9</td></tr><tr role="row" class="odd"><td>DB12952</td><td>Methylprednisone</td><td>C<sub>22</sub>H<sub>28</sub>O<sub>5</sub></td><td>91523-05-6</td><td class="sorting_1">-7.4</td><td>-8.39</td><td>372.461</td><td>2</td><td>5</td><td>4</td><td>5</td><td>4</td><td> 1.8</td></tr><tr role="row" class="even"><td>DB00894</td><td>Testolactone</td><td>C<sub>19</sub>H<sub>24</sub>O<sub>3</sub></td><td>968-93-4</td><td class="sorting_1">-7.4</td><td>-8.28</td><td>300.3921</td><td>0</td><td>2</td><td>0</td><td>3</td><td>4</td><td> 3.0</td></tr><tr role="row" class="odd"><td>DB01591</td><td>Solifenacin</td><td>C<sub>23</sub>H<sub>26</sub>N<sub>2</sub>O<sub>2</sub></td><td>242478-37-1</td><td class="sorting_1">-7.0</td><td>-8.40</td><td>362.473</td><td>0</td><td>1</td><td>4</td><td>4</td><td>5</td><td> 3.9</td></tr></tbody>
                    </table></div>
                </div>
            </div>
</div>
<script src="../js/popper.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
<div style="display: none; position: fixed; z-index: 10; pointer-events: none; background-color: rgba(0, 0, 0, 0.6); color: lightgrey; padding: 8px; font-family: sans-serif;"></div>

<script>

        //这一段js表示点击图片放大，再点击恢复原样。
        var imgsObj = $('.amplifyImg img');//需要放大的图像
        //console.log("imgsObj:"+imgsObj);
        if(imgsObj){
            $.each(imgsObj,function(){
                $(this).click(function(){
                    var currImg = $(this);
                    coverLayer(1);
                    var tempContainer = $('<div class=tempContainer></div>');//图片容器
                    with(tempContainer){//width方法等同于$(this)
                        appendTo("body");
                        var windowWidth=$(window).width();
                        var windowHeight=$(window).height();
                        //获取图片原始宽度、高度
                        var orignImg = new Image();
                        orignImg.src =currImg.attr("src") ;
                        var currImgWidth= orignImg.width;
                        var currImgHeight = orignImg.height;
                        
                        var currImgChangeHeight=(currImgHeight*windowWidth)/currImgWidth;
                        if(currImgChangeHeight<windowHeight){
                            var topHeight=(windowHeight-currImgChangeHeight)/2;
                            if(topHeight>35){
                                topHeight=topHeight-35;
                                css('top',topHeight);
                            }else{
                                css('top',0);
                            }
                            html('<img border=0 src=' + currImg.attr('src') + ' width='+windowWidth+';>');
                        }else{
                            css('top',0);
                            html('<img border=0 src=' + currImg.attr('src') + ' width='+windowWidth+'; height='+windowHeight+'>');
                        }
                    }
                    tempContainer.click(function(){
                        $(this).remove();
                        coverLayer(0);
                    });
                });
            });
        }/*else{
            return false;
        }*/
        //使用禁用蒙层效果
        function coverLayer(tag){
            with($('.over')){
                if(tag==1){
                    css('height',$(document).height());
                    css('display','block');
                    css('opacity',1);
                    css("background-color","#191919");
                }
                else{
                    css('display','none');
                }
            }
        }
</script>
<script>
        
        window.onresize = function () {
            resizeNav(); 
            if(getFullscreenElement ()){
                $("#viewport").height($(window).height() - 80);
            }else{
                $("#viewport").height('430px');
            }   
            stage.handleResize();
        }

        function getFullscreenElement () {
            return document.fullscreenElement || document.mozFullScreenElement ||
                   document.webkitFullscreenElement || document.msFullscreenElement
        }

        function resizeNav(){
            //<style>.navbar-nav li {margin-right: 1.2em;margin-left: 1.2em;}</style>
            var Width = window.innerWidth//浏览器窗口的内部宽度（包括滚动条） 
                     || document.documentElement.clientWidth 
                     || document.body.clientWidth;
            if(Width>1200){
                $(".navbar-nav li").removeClass("mrl0-5");
                $(".navbar-nav li").addClass("mrl1-2");
            }else if(Width<=1200 && Width>1000){
                $(".navbar-nav li").removeClass("mrl1-2");
                $(".navbar-nav li").addClass("mrl0-5");
                
            }else if(Width<=1000){
                $(".navbar-nav li").removeClass("mrl0-5");
                $(".navbar-nav li").removeClass("mrl1-2");
            }
            //console.log(Width)
        }
        
        
        function show_view(){
            $("#li-view").css("background-color","#337ab7");
            $("#li-summary").css("background-color","#727b84");
        }
        function show_summary(){
            $("#li-summary").css("background-color","#337ab7");
            $("#li-view").css("background-color","#727b84");
        }

        var protein_name_1='3lbj_protein';
        document.getElementById("receptor_name").innerHTML = "Receptor-based Screen Result —— "+protein_name_1.toUpperCase();
        
        var download_file='../example/20220719010703/screen/3lbj_protein.pdb.tar.gz';
        document.getElementById("download").href = download_file;


        $(document).ready(function() {
            $('#drug-table').DataTable({
                "order": [[ 4, "asc" ]],
                "info":false,
                "paging":false,
                "searching":false
            });
            resizeNav();  
            $("#drugs_table_2 tr:even").addClass("table-secondary");
        });


</script>
<script>
        /////////////////////////////
        //FUNCTION
        ////////////////////////////
        // Create NGL Stage object
        var shownumber=1;
        function showLigand(e){
            if($(e).hasClass("table-success")){ 
                $("#limit-info").css('display','none');
                $(e).removeClass("table-success");
                console.log("e.id"+e.id);
                hideComponent("contact_" + e.id);
                hideComponent(e.id);
                if(shownumber>0){
                    shownumber--;
                }
                //console.log(e.id);
                console.log(shownumber);
                updateT(shownumber);
            }else if(!$(e).hasClass("table-success") && shownumber<5){
                $("#limit-info").css('display','none');
                $(e).addClass("table-success");
                if(document.getElementById("show_contact").checked){
                    showComponent("contact_" + e.id);
                }
                showComponent(e.id);
                shownumber++;
                //console.log(e.id);
                console.log(shownumber);
                updateT(shownumber);
            }else if(shownumber==5){
                $("#limit-info").css('display','');
            }
            
        }
        var logp_info_js = {"DB12978":["DB12978","417.8","1","3","5","5","4"," 4.4","6"],"DB13520":["DB13520","403.5","1","1","6","5","5"," 3.7","5"],"DB11942":["DB11942","443.3","2","5","6","8","3"," 3.0","6"],"DB00838":["DB00838","410.9","2","4","4","4","4"," 2.6","2"],"DB08912":["DB08912","519.6","2","5","6","7","4"," 4.7","6"],"DB00223":["DB00223","410.5","3","5","5","5","4"," 1.9","2"],"DB12952":["DB12952","372.5","2","5","4","5","4"," 1.8","2"],"DB00894":["DB00894","300.4","0","2","0","3","4"," 3.0","0"],"DB01591":["DB01591","362.5","0","1","4","4","5"," 3.9","3"]};
        var herb_info_js = {"DB12978":"","DB13520":"","DB11942":"","DB00838":"","DB08912":"","DB00223":"","DB12952":"","DB00894":"","DB01591":""}; 
        var target_info_js = {"DB12978":"P07333#Macrophage colony-stimulating factor 1 receptor@P10721#Mast\/stem cell growth factor receptor Kit@P36888#Receptor-type tyrosine-protein kinase FLT3@P09619#Platelet-derived growth factor receptor beta","DB13520":"Q99250#Sodium channel protein type 2 subunit alpha","DB11942":"O14980#Exportin-1","DB00838":"P04150#Glucocorticoid receptor","DB08912":"P15056#Serine\/threonine-protein kinase B-raf@P04049#RAF proto-oncogene serine\/threonine-protein kinase@P57059#Serine\/threonine-protein kinase SIK1@Q8NG66#Serine\/threonine-protein kinase Nek11@P53667#LIM domain kinase 1","DB00223":"P04150#Glucocorticoid receptor","DB12952":"","DB00894":"P11511#Aromatase","DB01591":"P20309#Muscarinic acetylcholine receptor M3@P08172#Muscarinic acetylcholine receptor M2@P08173#Muscarinic acetylcholine receptor M4@P08912#Muscarinic acetylcholine receptor M5@P11229#Muscarinic acetylcholine receptor M1"}; 
        //ref_info_js在DrugBank数据库中为pharmacodynamics
        var ref_info_js = {"DB12978":"Pexidartinib works by suppressing the growth of tenosynovial giant cell tumors. In clinical trials comprising of patients with symptomatic tenosynovial giant cell tumor, pexidartinib had a higher overall response rate, characterized by improved patient symptoms and functional outcomes, compared to placebo.2 Pexidartinib works by inhibiting the activation and signaling of tumor-permissive cytokines and receptor tyrosine kinases that play a central role in tumor cell proliferation and survival.3","DB13520":"Not Available","DB11942":"Selinexor causes cell cycle arrest and apoptosis in cancer cells.11","DB00838":"Like other topical corticosteroids, clocortolone has anti-inflammatory, antipruritic, and vasoconstrictive properties. Once absorbed through the skin, topical corticosteroids are handled through pharmacokinetic pathways similar to systemically administered corticosteroids. Clocortolone is a moderate potency topical corticosteroid that should not be used with occlusive dressings. It is recommended that treatment should be limited to 2 consecutive weeks and therapy should be discontinued when adequate results have been achieved.","DB08912":"Dabrafenib is a kinase inhibitor that is mainly used to target BRAF V600E mutation in multiple types of cancer. Although dabrafenib and trametinib both inhibit the RAS\/RAF\/MEK\/ERK pathway, they inhibit different effectors of the pathway, thus increasing response rate and mitigating resistance without cumulative toxicity.11","DB00223":"Like other topical corticosteroids, diflorasone has anti-inflammatory, antipruritic, and vasoconstrictive properties. Once absorbed through the skin, topical corticosteroids are handled through pharmacokinetic pathways similar to systemically administered corticosteroids. Diflorasone is a potent topical corticosteroid that should not be used with occlusive dressings. It is recommended that treatment should be limited to 2 consecutive weeks and therapy should be discontinued when adequate results have been achieved.","DB12952":"Not Available","DB00894":"Testolactone is a synthetic anti-neoplastic agent that is structurally distinct from the androgen steroid nucleus in possessing a six-membered lactone ring in place of the usual five-membered carbocyclic D-ring. Despite some similarity to testosterone, testolactone has no in vivo androgenic effect. No other hormonal effects have been reported in clinical studies in patients receiving testolactone.","DB01591":"Solifenacin antagonizes the M2 and M3 muscarinic receptors in the bladder to treat an overactive bladder.3,2 It has a long duration of action as it is usually taken once daily.3 Patients taking solifenacin should be aware of the risks of angioedema and anaphylaxis.3"};
        var ttd_info_js = {"DB12978":"D09TAB","DB13520":"","DB11942":"D00LNW","DB00838":"D00GOS","DB08912":"D05ROI","DB00223":"D0G7KJ","DB12952":"","DB00894":"D0C7JF","DB01591":"D0L4YD"};
        console.log("herb_info_js:"+herb_info_js);
        console.log("target_info_js:"+target_info_js);
        var library='FDA-approved';
        var svg_dir = "";
        if(library=="FDA-approved"){
            svg_dir="../lib/svg/fdaapp_new_svg/";
        }else if(library=="FDA-experimental"){
            svg_dir="../lib/svg/exp_pdbqt7kb_filter_svg/";
        }else if(library=="TCMML" || library=="tcmml"){
            svg_dir="../lib/svg/TCMML_svg/";
        }

        function updateT(shownumber){
            clearT();//先清空表格;
            let td_index = 0;  
            $('td[name="ligand"]').each(function(){
                if($(this).hasClass("table-success")){
                    let id = this.id.split("_")[0];
                    console.log(id);
                    td_index++;
                    let flag = String(td_index);
                    $("#id-"+flag).html(id);
                    $('#img-'+flag).attr("src",svg_dir+id+".svg");
                    $('#img-'+flag).css("width","150px");
                    $('#img-'+flag).css("height","150px");

                    $("#mw-"+flag).html(logp_info_js[id][1]);
                    $("#HBD-"+flag).html(logp_info_js[id][2]);
                    $("#HBA-"+flag).html(logp_info_js[id][3]);
                    $("#RB-"+flag).html(logp_info_js[id][4]);
                    $("#NOA-"+flag).html(logp_info_js[id][5]);
                    $("#R-"+flag).html(logp_info_js[id][6]);
                    $("#log-"+flag).html(logp_info_js[id][7]);
                    if(library=="TCMML" || library=="tcmml"){
                        $("#target-"+flag).html(target_info_js[id]);
                        $("#herb-"+flag).html(herb_info_js[id]);
                        $("#ref-"+flag).html(ref_info_js[id]);
                    }else{
                        var uniprotID = target_info_js[id];
                        if(uniprotID.length){
                            var uniprotIDs = uniprotID.split("@")
                            var uniprotHTML = "";
                            for(let i=0;i<uniprotIDs.length;i++)
                            {
                                var uniprot = uniprotIDs[i].split("#")[0];
                                var name = uniprotIDs[i].split("#")[1];
                                uniprotHTML += name+"(<a target=\"_blank\" title=\"Link to Uniprot\" href=\"http://www.uniprot.org/uniprot/"+uniprot+"\">"+uniprot+"<\a>)";
                                if(i!=uniprotIDs.length-1){
                                    uniprotHTML += ", "
                                }
                            }
                            $("#target-"+flag).html(uniprotHTML);
                        }
                        var ttdID = ttd_info_js[id]
                        if(ttdID!=""){
                            $("#link-"+flag).html("DrugBank: <a target=\"_blank\" title=\"Link to DrugBank\" href=\"https:/go.drugbank.com/drugs/"+id+"\">"+id+"<\a> <br>TTD: <a target=\"_blank\" title=\"Link to therapeutic target database\" href=\"http://db.idrblab.net/ttd/data/drug/details/"+ttdID+"\">"+ttdID+"<\a>");
                        }else{
                            $("#link-"+flag).html("DrugBank: <a target=\"_blank\" title=\"Link to DrugBank\" href=\"https:/go.drugbank.com/drugs/"+id+"\">"+id+"<\a>");
                        }

                        if(ref_info_js[id]=="")
                        {
                            $("#pharm-"+flag).html("Not Available");
                        }else{
                            $("#pharm-"+flag).html(ref_info_js[id]);
                        }
                    }
                    
                }  
                //$('[id="'+component.name+'"]').hasClass("table-success");
            });
            var w1 = $("#drugs_table_2").width();
            var w2 = $("#drugs_table_2 tr:first-child td:first-child").innerWidth();
            var w3 = (w1-w2)/td_index;
            console.log(w1,w2,w3,td_index);
            //$(".drugs_table_2_td").css("width",w3.toString());
            
        }

        function clearT(){
            //console.log("clear");
            $(".drugs_table_2_td").each(function(){
                //console.log($(this));
                $(this).html("");
            });
            $(".drugs_table_2_img").each(function(){
                //console.log($(this));
                $(this).attr("src","");
                $(this).css("width","0");
                $(this).css("height","0");
            });
        }
        var stage = new NGL.Stage( "viewport", {backgroundColor: "white"});
        var receptorFileName = "receptor.pdb";

        function fullscreen () {
            stage.toggleFullscreen(document.getElementById('ngl-ui'));
        }
        function center () {
            stage.autoView(1000);
        }
        function hideComponent(name){
            var hideStruct = stage.getComponentsByName(name);
            hideStruct.list[0].setVisibility(false);       
        }

        function showComponent(name){
            var showStruct = stage.getComponentsByName(name);
            showStruct.list[0].setVisibility(true); 
        }

        function addHydrogen(name){
            //stage.getComponentsByName(name).list[0].setSelection('not _H');
            stage.getRepresentationsByName(name).setSelection('not _H');
        }

        function subHydrogen(name){
            //stage.getComponentsByName(name).list[0].setSelection('*');
            stage.getRepresentationsByName(name).setSelection('*');
        }
        
        function hideReceptor(e){
              $($(e).siblings()).removeClass("active");
              $(e).addClass("active");
              hideComponent(receptorFileName);
        }

        function repReceptor(e) {
            showComponent(receptorFileName);
            $($(e).siblings()).removeClass("active");
            $(e).addClass("active");

            stage.getRepresentationsByName('polymer').dispose();
            //obj = stage.getComponentsByName(receptorFileName)
            stage.eachComponent(function(o){
                if(o.name == receptorFileName){
                    recRep = o.addRepresentation(e.value, {name: 'polymer'});
                    if(e.value == 'surface'){
                        recRep.setParameters({
                            surfaceType: 'av',
                            colorScheme: 'element',
                            opacity: $("#opacity").val(),
                            //opacity: 0.6,
                            opaqueBack: false,
                            clipNear: $("#clipNear").val(),
                            background: document.getElementById("surf_bg").checked,
                        });
                        //document.getElementById("opacity").defaultValue = 0.60;
                    }else{
                        document.getElementById("opacity").value = 1.00;
                        document.getElementById("clipNear").value = 0.00;
                        document.getElementById("surf_bg").checked = '';
                    }
                }
            })

            $("#colorReceptor ~ div").children().removeClass("active");
            if(e.value == "cartoon" || e.value == "backbone"){
                $("#colorReceptor ~ div [value='chainid']").addClass("active");
                stage.getRepresentationsByName('polymer').setColor("chainid");
            }else if(e.value == "spacefill" || e.value == "licorice"){
                $("#colorReceptor ~ div [value='element']").addClass("active");
            }else if(e.value == "surface"){
                $("#colorReceptor ~ div [value='element']").addClass("active");
            }
        }
        
        function repLigand(e) {
            $($(e).siblings()).removeClass("active");
            $(e).addClass("active");

            $("#colorLigand ~ div").children().removeClass("active");
            $("#colorLigand ~ div [value='" + (e.value=="surface"? "uniform":"element") + "']").addClass("active");

            var patt = /contatc_/;
            stage.getRepresentationsByName('ligand').dispose();
            stage.eachComponent(function (o){
                if(o.name != receptorFileName && !patt.test(o.name)){
                    r = o.setVisibility($('[id="' + o.name+'"]').hasClass("table-success"));
                    o.addRepresentation(e.value, {name: 'ligand',sele:'/0'})
                }
            })
        }

        function hydrogen(){
            if($("#hydrogen").val() == "existed"){
                addHydrogen("ligand");
                $("#hydrogen").attr("value","non-existed");
            }else{
                subHydrogen("ligand");
                $("#hydrogen").attr("value","existed");
            }
        }

        function colorReceptor(e) {
            //高亮点击项，其他项变灰
            $($(e).siblings()).removeClass("active");////返回带有类名 "e" 的每个 <li> 元素的所有同级元素：
            $(e).addClass("active");

            stage.getRepresentationsByName('polymer').setColor(e.value);
        }

        function colorLigand(e) {
            $($(e).siblings()).removeClass("active");
            $(e).addClass("active");
            if(e.value == "ligandId"){
                $.each(stage.getRepresentationsByName('ligand').list, function(i,o){
                o.setColor(['#44B3C2','#F1A94E','#462066','#7B8D8E','#66CC66','#CCCC99',
                            '#2C6700','#CC3300','#663333','#CC0033','#0000FF','#00CC33',
                            '#192B33','#9D538E','#D5D50D','#99FF00','#FF00FF','#CCCCFF',
                            '#99330A','#44B3C2','#F1A94E','#462066','#7B8D8E','#66CC66',
                            '#2C6700','#CC3300','#663333','#CC0033','#0000FF','#00CC33',
                            '#192B33','#9D538E','#D5D50D','#99FF00','#FF00FF','#CCCCFF',
                            '#192B33','#9D538E','#D5D50D','#99FF00','#FF00FF','#CCCCFF',
                            '#99330A','#44B3C2','#F1A94E','#462066','#7B8D8E','#66CC66',
                            '#99330A','#CCCC99',][i])
                });
            }else if(e.value == "uniform"){
                stage.getRepresentationsByName('ligand').setColor(9474192);
                stage.getRepresentationsByName('ligand').setColor(e.value);
            }else{
                console.log(e.value);
                $.each(stage.getRepresentationsByName('ligand').list, function(i,o){
                    o.setColor(['#44B3C2','#F1A94E','#462066','#7B8D8E','#66CC66','#CCCC99','#2C6700','#CC3300','#663333','#CC0033','#0000FF','#00CC33','#192B33','#9D538E','#D5D50D','#99FF00','#FF00FF','#CCCCFF','#99330A','#44B3C2','#F1A94E','#462066','#7B8D8E','#66CC66','#2C6700','#CC3300','#663333','#CC0033','#0000FF','#00CC33','#192B33','#9D538E','#D5D50D','#99FF00','#FF00FF','#CCCCFF','#192B33','#9D538E','#D5D50D','#99FF00','#FF00FF','#CCCCFF','#99330A','#44B3C2','#F1A94E','#462066','#7B8D8E','#66CC66','#99330A','#CCCC99',][i])
                });
                stage.getRepresentationsByName('ligand').setColor(e.value);
            }
        }

        function initCustomTooltip(){
          var tooltip = document.createElement('div')
          Object.assign(tooltip.style, {
            display: 'none',
            position: 'fixed',
            zIndex: 10,
            pointerEvents: 'none',
            backgroundColor: 'rgba( 0, 0, 0, 0.6 )',
            color: 'lightgrey',
            padding: '8px',
            fontFamily: 'sans-serif'
          })
          document.body.appendChild(tooltip)

          stage.mouseControls.remove('hoverPick')

          stage.signals.hovered.add(function (pickingProxy) {
            if (pickingProxy && (pickingProxy.atom || pickingProxy.bond)) {
              var atom = pickingProxy.atom || pickingProxy.closestBondAtom;
              var mp = pickingProxy.mouse.position;
              tooltip.style.bottom = window.innerHeight - mp.y + 3 + 'px';
              tooltip.style.left = mp.x + 3 + 'px';
              tooltip.style.display = 'none';

              //console.log("atom.structure.name: "+atom.structure.name);

              if(atom.structure.name == receptorFileName){
                tooltip.innerText = 'ATOM: ' + atom.qualifiedName();
                $('#ngl_status').empty();
                $('#ngl_status').css("visibility","visible");
                $('#ngl_status').append('ATOM: ' + atom.qualifiedName());

                tooltip.innerText += " (RECEPTOR)";
                $('#ngl_status').append(" (RECEPTOR)");
              }else{
                let index = atom.index+1;
                tooltip.innerText = 'ATOM: ' + index + "(" + atom.atomname + ")";
                $('#ngl_status').empty();
                $('#ngl_status').css("visibility","visible");
                $('#ngl_status').append('ATOM: ' + index + "(" + atom.atomname + ")");

                tooltip.innerText += " (LIGAND)"
                $('#ngl_status').append(" (LIGAND)");
                let id = atom.structure.name.split("_")[0];
                if(id=="contact"){
                    id = atom.structure.name.split("_")[1];
                }
                tooltip.innerText += " ID:"+id;
                $('#ngl_status').append(" ID:"+id);

                let score = document.getElementById(id+"-score").innerText;
                tooltip.innerText += " Score:"+score;
                $('#ngl_status').append(" Score:"+score);
              }
            }else{
              tooltip.style.display = 'none';
              $('#ngl_status').empty();
              $('#ngl_status').append("nothing");
              $('#ngl_status').css("visibility","hidden");
            }
          })
        }



        //load pdb and mol2 files and display in viewer



        // Load PDB and Ligand
        //stage.loadFile( "../example/Nutlin-3a:MDM2:20180302165246/receptor.pdb", { defaultRepresentation: true } );
        var dirname='../example/20220719010703/screen/';
        var protein_name='3lbj_protein.pdb';
        var rec_data=dirname+"receptor.pdb";

        function loadStructures () {
            stage.removeAllComponents();
            let index = 0;
            
            Promise.all([
                stage.loadFile(rec_data).then(function (component) {
                    component.autoView();
                    component.addRepresentation('surface', {
                        name: 'polymer',
                        visible: true,
                        sele: 'polymer',
                        surfaceType: 'av',
                        colorScheme: 'element',
                        opacity: 0.6,
                        opaqueBack: false,
                        clipNear: 0.00,
                    })
                })
            ]).then(function(){
                $('td[name="ligand"]').each(function(){
                    Promise.all([
                        //stage.loadFile(rec_data),
                        stage.loadFile(dirname + this.id)

                    ]).then(function(ol2){
                        //console.log(ol2[0]);
                        var cs = NGL.concatStructures(
                            "contact_"+ol2[0].name,
                            stage.getComponentsByName("receptor.pdb").list[0].structure.getView(new NGL.Selection("not ligand")),
                            ol2[0].structure.getView(new NGL.Selection("/0"))
                        )
                        ol2[0].setVisibility($('[id="'+ol2[0].name+'"]').hasClass("table-success"));
                        ol2[0].addRepresentation('ball+stick', {
                            name: 'ligand',
                            //visible: true,
                            colorScheme:  'element',
                            colorValue: ['#44B3C2','#F1A94E','#462066','#7B8D8E','#66CC66','#CCCC99','#2C6700','#CC3300','#663333','#CC0033','#0000FF','#00CC33','#192B33','#9D538E','#D5D50D','#99FF00','#FF00FF','#CCCCFF','#99330A','#44B3C2','#F1A94E','#462066','#7B8D8E','#66CC66','#2C6700','#CC3300','#663333','#CC0033','#0000FF','#00CC33','#192B33','#9D538E','#D5D50D','#99FF00','#FF00FF','#CCCCFF','#192B33','#9D538E','#D5D50D','#99FF00','#FF00FF','#CCCCFF','#99330A','#44B3C2','#F1A94E','#462066','#7B8D8E','#66CC66','#99330A','#CCCC99',][index++],
                            multipleBond: "offset",
                            sele: '/0' //select first ligand
                        })

                        var comp = stage.addComponentFromObject(cs);
                        var radius = 5;
                        var sele_lig = cs.getView(new NGL.Selection("/1"));
                        var sele_atms = cs.getAtomSetWithinSelection(new NGL.Selection("/1"), radius);
                        var sele_atms_expand = cs.getAtomSetWithinGroup(sele_atms);

                        if(document.getElementById("show_contact").checked){
                            comp.setVisibility($('[id="'+ol2[0].name+'"]').hasClass("table-success"));
                        }else{
                            comp.setVisibility(false);
                        }
                        
                        comp.addRepresentation("contact", {
                          masterModelIndex: 0,
                          weakHydrogenBond: true,
                          //piStacking: true, // default
                          //backboneHydrogenBond: true,
                          hydrophobic: true,
                          maxHbondDonPlaneAngle: 30,
                          maxHbondDist: 3.5,
                          maxHydrophobicDist: 4.0,
                          radiusScale: 2.0,
                          //sele: sele_atms_expand.toSeleString() + "or /1"
                          sele: sele_atms_expand.toSeleString()
                        })

                        comp.addRepresentation("line", {
                          colorValue: '#d3d3d3',
                          sele: sele_atms_expand.toSeleString()
                        })

                        comp.addRepresentation("label", {
                          labelType: 'residue',
                          labelGrouping: 'residue',
                          fontWeight: 'bold',
                          radiusScale: 1.5,
                          colorValue: 'black',
                          colorScheme: 'element',
                          sele: "("+sele_atms_expand.toSeleString()+")"+" and (not /1)"
                        })

                        comp.autoView("not ligand")
                        //stage.setFocus(95)


                    })

                })
            })
            
            

            
            

        }
        
        //$('tr[name="pocket"]').each(function(){loadLigand(dirname+"/"+this.id);});

        //initialize listeners and view
        window.addEventListener('load', function(){
            document.getElementById("opacity").defaultValue = 0.60;
            document.getElementById("clipNear").defaultValue = 0.00;
            document.getElementById("scale").defaultValue = 10;
            
            //$("select option:first-child").attr("selected", true);
            //$("#viewport").height($(window).height() * 0.6);

            loadStructures();
            initCustomTooltip();
            updateT(1);

            $(function() {
                $( "#settings" ).dialog({
                    autoOpen: false,
                    resizable: false,
                    show: {effect: "fade", duration: 500},
                    hide: {effect: "clip", duration: 500}
                });

                $( "#btn_settings" ).click(function() {
                    $( "#settings" ).dialog("open");
                });
            });

            $(function() {
                $( "#savePic" ).dialog({
                    autoOpen: false,
                    resizable: false,
                    show: {effect: "fade", duration: 500},
                    hide: {effect: "clip", duration: 500}
                });

                $( "#btn_savePic" ).click(function() {
                    $( "#savePic" ).dialog("open");
                });
            });

            //stage = new NGL.Stage("viewport", {backgroundColor: "white"});
            $("#opacity").on('input propertychange',function(){
                stage.getRepresentationsByName('polymer').setParameters({opacity: $("#opacity").val()});
                console.log($("#opacity").val());
                console.log(stage.getRepresentationsByName('polymer'));
            });
            $("#clipNear").on('input propertychange',function(){
                stage.getRepresentationsByName('polymer').setParameters({clipNear: $("#clipNear").val()});
            });
            $("#show_contact").on('click', function() {
                var show_contact_check = document.getElementById('show_contact').checked;
                if (show_contact_check) {
                    $('td[name="ligand"]').each(function() {
                      //console.log(this.id);
                      if ($('[id="' + this.id + '"]').hasClass("table-success")) {
                        showComponent("contact_" + this.id);
                      }
                    })
                }else {
                    $('td[name="ligand"]').each(function() {
                        //console.log(this.id);
                        hideComponent("contact_" + this.id);
                    })
                }
            });
            $("#surf_bg").on('click', function(){
                var surf_bg_check = document.getElementById('surf_bg').checked;
                stage.getRepresentationsByName('polymer').setParameters({background: surf_bg_check});
            });
            $("#dark_stage_bg").on('click', function(){
                var dark_stage_bg = document.getElementById('dark_stage_bg').checked;
                if(dark_stage_bg){
                    stage.setParameters({backgroundColor: "black"});
                }else{
                    stage.setParameters({backgroundColor: "white"});
                }   
            });

            $("#export").on('click', function(){
                var progress = $("#progress_savePic");
                $("#export").css('display','none');
                progress.css('display','');

                var antialias_check = document.getElementById('antialias').checked;
                var trim_check = document.getElementById('trim').checked;
                var transparent_check = document.getElementById('transparent').checked;
                var picName = $("#picName").val()+'.png';
                stage.makeImage({
                    factor: parseInt($("#scale").val()),
                    antialias: antialias_check,
                    trim: trim_check,
                    transparent: transparent_check,
                }).then(function(blob) {
                    $("#export").css('display','');
                    progress.css('display','none');
                    NGL.download(blob, picName)
                });
            });
        });
</script>
<div tabindex="-1" role="dialog" class="ui-dialog ui-corner-all ui-widget ui-widget-content ui-front ui-draggable" aria-describedby="settings" style="display: none;" aria-labelledby="ui-id-1"><div class="ui-dialog-titlebar ui-corner-all ui-widget-header ui-helper-clearfix ui-draggable-handle"><span id="ui-id-1" class="ui-dialog-title">Settings</span><button type="button" class="ui-button ui-corner-all ui-widget ui-button-icon-only ui-dialog-titlebar-close" title="Close"><span class="ui-button-icon ui-icon ui-icon-closethick"></span><span class="ui-button-icon-space"> </span>Close</button></div><div class="ui-dialog ui-dialog-content ui-widget-content" id="settings" style="">
                          <div class="ui-dialog-content">
                            <div class="form-row">
                                <div class="col">
                                  <label for="opacity">opacity</label>
                                </div>
                                <div class="col">
                                  <input type="range" class="form-control-range" id="opacity" min="0.00" max="1.00" step="0.0100" value="0.6">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col">
                                  <label for="clipNear">clipNear</label>
                                </div>
                                <div class="col">
                                  <input type="range" class="form-control-range" id="clipNear" min="0.00" max="100" step="1.00" value="0">
                                </div>      
                            </div>
                            <div class="form-row">
                                <div class="col">
                                  <label for="show_contact">contact</label>
                                </div>
                                <div class="col">
                                  <input type="checkbox" id="show_contact">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col">
                                  <label for="surf_bg">background</label>
                                </div>
                                <div class="col">
                                  <input type="checkbox" id="surf_bg">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col">
                                  <label for="dark_stage_bg">dark stage</label>
                                </div>
                                <div class="col">
                                  <input type="checkbox" id="dark_stage_bg">
                                </div>
                            </div>
                          </div>
                        </div>
</div>
<div tabindex="-1" role="dialog" class="ui-dialog ui-corner-all ui-widget ui-widget-content ui-front ui-draggable" aria-describedby="savePic" style="display: none;" aria-labelledby="ui-id-2"><div class="ui-dialog-titlebar ui-corner-all ui-widget-header ui-helper-clearfix ui-draggable-handle"><span id="ui-id-2" class="ui-dialog-title">Save Picture</span><button type="button" class="ui-button ui-corner-all ui-widget ui-button-icon-only ui-dialog-titlebar-close" title="Close"><span class="ui-button-icon ui-icon ui-icon-closethick"></span><span class="ui-button-icon-space"> </span>Close</button></div><div class="ui-dialog ui-dialog-content ui-widget-content" id="savePic" style="">
                          <div class="ui-dialog-content">
                            <div class="form-row">
                                <div class="col">
                                  <label for="scale">scale</label>
                                </div>
                                <div class="col">
                                  <input type="range" class="form-control-range" id="scale" min="1" max="10" step="1" value="10">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col">
                                  <label for="antialias">antialias</label>
                                </div>
                                <div class="col">
                                  <input type="checkbox" id="antialias" checked="checked">
                                </div>      
                            </div>
                            <div class="form-row">
                                <div class="col">
                                  <label for="trim">trim</label>
                                </div>
                                <div class="col">
                                  <input type="checkbox" id="trim" checked="checked">
                                </div>      
                            </div>
                            <div class="form-row">
                                <div class="col">
                                  <label for="transparent">transparent</label>
                                </div>
                                <div class="col">
                                  <input type="checkbox" id="transparent" checked="checked">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col">
                                  <label for="transparent">picName</label>
                                </div>
                                <div class="col">
                                  <div class="form-row">
                                    <div class="col-10 pr-0">
                                      <input type="text" class="form-control p-0" id="picName" value="screenshot">
                                    </div>
                                    <div class="col-2 pl-0">
                                      .png
                                    </div>
                                  </div>
                                </div>
                            </div>
                            <button class="ui-button ui-corner-all pl-2 pr-2 pt-1 pb-1" id="export">export</button>
                            <div class="progress" id="progress_savePic" style="display: none;">
                                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">load...</div>
                            </div>
                          </div>
</div></div>

</body>
</html>


