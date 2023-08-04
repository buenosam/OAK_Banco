<?php
    switch ($_REQUEST["acao"]){
        case 'cadastrar':
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $senha = md5($_POST["senha"]);

            $sql = "INSERT INTO usuarios (nome, email, senha) VALUES ('{$nome}', '{$email}', '{$senha}')";

            $res = $conn->query($sql);

            if(@$res==true){
                print "<script>alert('WELCOME ABOARD PEOPLE');</script>";
                print "<script>location.href='?page=logar';</script>";
            }else{
                print "<script>alert('NÃO FOI POSSIVEL CADASTRAR');</script>";
                print "<script>location.href='?page=novo';</script>";
            }

        break;
        
        case 'editar':
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $senha = md5($_POST["senha"]);

            $sql = "UPDATE usuarios SET 
                nome='{$nome}',
                email='{$email}',
                senha='{$senha}',
                WHERE
                    id=".$_REQUEST["id"];

            $res = $conn->query($sql);

            if(@$res==true){
                print "<script>alert('EDITADO COM SUCESSO!');</script>";
                print "<script>location.href='?page=logar';</script>";
            }else{
                print "<script>alert('NÃO FOI POSSIVEL EDITAR');</script>";
                print "<script>location.href='?page=novo';</script>";
            }

        break;

        case 'excluir':
            $sql = "DELETE FROM usuarios WHERE id=".$_REQUEST["id"];

            $res = $conn->query($sql);

            if(@$res==true){
                print "<script>alert('EXCLUIDO COM SUCESSO!');</script>";
                print "<script>location.href='?page=logar';</script>";
            }else{
                print "<script>alert('NÃO FOI POSSIVEL EXCLUIR');</script>";
                print "<script>location.href='?page=novo';</script>";
            }
        
        break;












    }