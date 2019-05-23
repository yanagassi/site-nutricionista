    
@foreach($artigo['artigos'] as $k)
    <?$url = $k->nome?>
    <?$texto = $k->texto?>
    <?$imagem = $k->imagem?>
    <?$titulo = $k->titulo?>
@endforeach
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?=$titulo?></title>
    <link rel="shortcut icon" href="https://www.ludgerosangaletti.com.br/admin/public/img/logoPequenoAzul.png">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?=$titulo?>" />
    <meta property="og:type" content="blog" />
    <meta property="og:locale" content="'pt-BR" />
    <meta property="og:title" content="<?=$titulo?>" />
    <meta property="og:url" content="https://www.ludgerosangaletti.com.br/admin/public/<?$url?>"  />
    <meta property="og:site_name" content="Ludgero Sangaletti - Nutrição esportiva" />
    <meta property="og:description" content="<?=$titulo?>" />
    <meta property="og:image" content="https://www.ludgerosangaletti.com.br/admin/public/uploads/imagesBlog/<?=$imagem?>" />
</head>
<body>
    <header>
        <div class="header isBlue">
            <a target="blank" href="https://ludgerosangaletti.com.br"><center><img class="imgHeader" src="https://ludgerosangaletti.com.br/logoNovo.png"></center></a>
        </div>
    </header>
    <div class="ui container spacer">
        <h2 class="ui header"><?=$titulo?></h2>
        <?=$texto?>
    </div>
    <footer>
        <div class="footer isBlue">
            <center><img class="smallImg" src="https://ludgerosangaletti.com.br/logoNovo.png" alt="Image description"><center>
            <p class="ui header isWhite">Nos siga nas redes sociais:</p>
            <div class="itemRodape">
                <div>
                    <a href="https://www.facebook.com/ludgero.sangaletti" target="_blank"><i class="facebook icon big isWhite"></i></a>
                </div>
                <div>
                    <a href="https://www.instagram.com/ludgerosangaletti/" target="_blank"><i class="instagram icon big isWhite"></i></a>
                </div>
                <div>
                    <a href="#!"><i class="youtube icon big isWhite"></i></a>
                </div>
            </div>
        </div>
    </footer>
    <style>
        .isBlue{
            background-color:#2065a1;
        }
        .imgHeader{
            padding:20px;
        }
        .imgHeader:hover{
            transform:scale(1.05);
            transition: width 1s height 1s;
        }
        .spacer{
            margin-top:15px;
            margin-bottom:15px;
        }
        .itemRodape{
            padding:20px;
            display:flex;
            align-items:center;
            justify-content:center;
        }
        .itemRodape li{
            margin-right:8px;
            margin-right:8px;
        }
        .isWhite{
            color:white!important;
        }
        .smallImg{
            max-width:200px;
            max-height:100px;
        }
    </style>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.3/semantic.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.3/semantic.css">
</body>
</html>

  
