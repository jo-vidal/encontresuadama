<?php
// Define que o arquivo terá a codificação de saída no formato CSS
header("Content-type: text/css");

$cor_fundo = '#2F4F4F';
$cor_texto = 'black';
$cor_h1 = "#c2a15d"
?>

@import url (https://fonts.googleapis.com/css?family=Open%20Sans:400,600,700|Euphoria%20Script:400|Lato:400,700|Roboto:400,700);

    body{
      margin-left: auto; 
      margin-right: auto; 
      width: 940px;
      background-color:<?php echo $cor_fundo; ?>;
      background-image: opacity: 0.5;
      background-attachment: fixed;
    }
    label {
      width:150px;
      display: inline-block;
      color: <?php echo $cor_texto; ?>;
      font-family: 'Euphoria Script';
      font-size: 25px;
    }

    #menu ul {
      /* bloco de menu */
        padding: 15px;
        margin: 0px;
        background-color: white;
        list-style:none;
    }

    #menu ul li { display: inline;}

    h1{
      color: <?php echo $cor_h1; ?>;
      font-family: 'Euphoria Script';
    }
  
    h2{
      color: <?php echo $cor_h1; ?>;
      font-family: 'Euphoria Script';
      text-align: left;
    }

    h3{
      color: black;
      font-family: 'Euphoria Script';
    }

    h4{
      color: black;
      text-align: left;
      line-height: 0;
    }

    #menu ul li a {
        padding: 2px 25px;
        display: inline-block;
        /* visual do menu */
        background-color: white;
        color: black;
        font-family: "Times New Roman", "Times", cursive;
        text-decoration: none;
        border-bottom:3px solid #CDB7B5;
    }

    #menu ul li a:hover {
      /* visual de quando passa o mouse */
        background-color: white;
        color: #c2a15d;
        font-family: "Times New Roman", "Times", cursive;
        border-bottom:3px solid white;
    }

   .image{
    background-color: #F8F8FF;
    text-align: center;
    width: 782px;
    height: 440px;
    float:none;
    display:block;
    margin-left:auto;
    margin-right:auto;
    }

    .img-i{
      background: url('mano.png');
    width: 400px;
    height: 400px;
    float:none;
    display:block;
    margin-left:0.5em;
    margin-right:0.5em;
      }

    .img-ii{
      background: url('mina.png');
    width: 400px;
    height: 400px;
    float:none;
    display:block;
    margin-left:0.5em;
    margin-right:0.5em;
      }

    .img-iii{
      background: url('mona.png');
    width: 400px;
    height: 400px;
    float:none;
    display:block;
    margin-left:0.5em;
    margin-right:0.5em;
      }
    
    .img1{
      background: url('laranja.jpg');
    width: 782px;
    height: 440px;
    float:none;
    display:block;
    margin-left:auto;
    margin-right:auto; 
      }

    .img2{
      background: url('laranja.jpg') no-repeat;
    width: 490px;
    height: 440px;
    float:none;
    display:block;
    margin-left:0.5em;
    margin-right:0.5em;
      }

    .img3{
      background: url('https://yata.ostr.locaweb.com.br/8aeb6af4a7947ff0443796cb404250fdae82a831186a7f83a19171d61a78f969');
    width: 1500px; /*largura*/
    height: 400px; /*altura*/
    /*float:none;
    display:block;
    margin-left:auto;
    margin-right:auto;*/
      }

.conteudo{
    background-color: white;
    image-align: center;
    text-align: center;
}

.apps{
      background-color: #F8F8FF;
      image-align: center;
      text-align: center;
  }
  
.chute {
	position: relative;
	top: -198px;
	left: 600px;
	width: 500px;
}
.botao{/*https://dabuttonfactory.com/*/
background:    #002c3a;
border-radius: 1000px;
padding:       8px 20px;
color:         #c2a15d;
display:       inline-block;
font:          normal bold 15px/1 "Caviar", sans-serif;
text-align:    center;
}

.flex-direita {
  display: flex;
  justify-content: right;
}

.flex-direita-home {
  display: flex;
  justify-content: right;
  left: 100px;
}

.flex-centralizado {
  display: flex;
  justify-content: center;
}
    
.rodape{
  background: #333;
  padding: 45px;
  margin-top: auto;
  color: white;
  font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
  text-align: center;
  width: 850px; /*largura*/
  height: 150px; /*altura*/
}
/* Exibir senha (olho) */
#input > * {
  height: 1.3em;
  float: left;
}

#input img {
  cursor: pointer;
}