<!DOCTYPE>
<html>
<head>
<meta charset="iso-8859-1" />
<title>CADASTRO DE ALUNO</title>

<script type="text/javascript">
		function validaCampo()
		{
		if(document.cadastro.nome.value=="")
			{
			alert("O Campo nome é obrigatório!");
			return false;
			}
		else
			if(document.cadastro.email.value=="")
			{
			alert("O Campo email é obrigatório!");
			return false;
			}
                else
			if(document.cadastro.sobrenome.value=="")
			{
			alert("O Campo sobrenome é obrigatório!");
			return false;
			}
                else
			if(document.cadastro.matricula.value=="")
			{
			alert("O Campo matricula é obrigatório!");
			return false;
			}
                else
			if(document.cadastro.bairro.value=="")
			{
			alert("O Campo bairro é obrigatório!");
			return false;
			}
               else
			if(document.cadastro.logradouro.value=="")
			{
			alert("O Campo logradouro é obrigatório!");
			return false;
			}
               else
			if(document.cadastro.cidade.value=="")
			{
			alert("O Campo cidade é obrigatório!");
			return false;
			}
               else
			if(document.cadastro.numero.value=="")
			{
			alert("O Campo numero é obrigatório!");
			return false;
			}
               else
			if(document.cadastro.cep.value=="")
			{
			alert("O Campo cep é obrigatório!");
			return false;
			}
               else
			if(document.cadastro.rg.value=="")
			{
			alert("O Campo rg é obrigatório!");
			return false;
			}
               else
			if(document.cadastro.orientador.value=="")
			{
			alert("O Campo orientador é obrigatório!");
			return false;
			}
               else
			if(document.cadastro.supervisor.value=="")
			{
			alert("O Campo rg é obrigatório!");
			return false;
			}
               else
			if(document.cadastro.data_nasc.value=="")
			{
			alert("O Campo data de nascimento é obrigatório!");
			return false;
			}
               else
			if(document.cadastro.telefone.value=="")
			{
			alert("O Campo telefone é obrigatório!");
			return false;
			}
               else
			if(document.cadastro.celular.value=="")
			{
			alert("O Campo celular é obrigatório!");
			return false;
			}
               else
			if(document.cadastro.curso.value=="")
			{
			alert("O Campo curso é obrigatório!");
			return false;
			}
               else
			if(document.cadastro.semestre.value=="")
			{
			alert("O Campo semestre é obrigatório!");
			return false;
			}
		else
			if(document.cadastro.login.value=="")
			{
			alert("O Campo Login é obrigatório!");
			return false;
			}
		else	
		if(document.cadastro.senha.value=="")
			{
			alert("Digite uma senha!");
			return false;
			}
		else
		return true;
		}
</script>
</head>

<body>
<form id="cadastro" name="cadastro" method="post" action="cadastro.php" onsubmit="return validaCampo(); return false;">
  <table width="625" border="0">
      <td>Dados pessoais</td>
    <tr>
      <td width="69">Nome:</td>
      <td width="546"><input name="nome" type="text" id="nome" size="70" maxlength="60" />
        <span class="style1">*</span></td>
    </tr>
    <tr>
      <td width="69">Sobrenome:</td>
      <td width="546"><input name="sobrenome" type="text" id="sobrenome" size="70" maxlength="60" />
        <span class="style1">*</span></td>
    </tr>
    <tr>
      <td width="69">Matricula:</td>
      <td width="546"><input name="matricula" type="text" id="matricula" size="70" maxlength="60" />
        <span class="style1">*</span></td>
    </tr>
    <tr>
      <td width="69">Data de nascimento:</td>
      <td width="546"><input name="data_nasc" type="text" id="data_nasc" size="70" maxlength="60" />
        <span class="style1">*</span></td>
    </tr>
    <tr>
      <td width="69">RG:</td>
      <td width="546"><input name="rg" type="text" id="rg" size="70" maxlength="60" />
        <span class="style1">*</span></td>
    </tr>
    <tr>
      <td>Telefone:</td>
        <td width="546"><input name="telefone" type="text" id="telefone" />
        <span class="style3">Apenas n&uacute;meros</span> </td>
    </tr>
    <tr>
      <td width="69">Celular:</td>
      <td width="546"><input name="celular" type="text" id="celular" size="70" maxlength="60" />
        <span class="style1">*</span></td>
    </tr>
    <tr>
      <td width="69">Curso:</td>
      <td width="546"><input name="curso" type="text" id="curso" size="70" maxlength="60" />
        <span class="style1">*</span></td>
    </tr>
    <tr>
      <td width="69">Semestre:</td>
      <td width="546"><input name="semestre" type="text" id="semestre" size="70" maxlength="60" />
        <span class="style1">*</span></td>
    </tr>
    <tr>
      <td>Bairro:</td>
      <td><input name="bairro" type="text" id="bairro" maxlength="20" />
        <span class="style1">*</span></td>
    </tr>
    <td>Informacoes de endereco</td>
    <tr>
      <td width="69">Logradouro:</td>
      <td width="546"><input name="logradouro" type="text" id="logradouro" size="70" maxlength="60" />
        <span class="style1">*</span></td>
    </tr>
    <tr>
      <td width="69">Bairro:</td>
      <td width="546"><input name="bairro" type="text" id="bairro" size="70" maxlength="60" />
        <span class="style1">*</span></td>
    </tr>
    <tr>
      <td width="69">Cidade:</td>
      <td width="546"><input name="cidade" type="text" id="cidade" size="70" maxlength="60" />
        <span class="style1">*</span></td>
    </tr>
    <tr>
      <td width="69">Numero:</td>
      <td width="546"><input name="numero" type="text" id="numero" size="70" maxlength="60" />
        <span class="style1">*</span></td>
    </tr>
    <tr>
      <td width="69">Cep:</td>
      <td width="546"><input name="cep" type="text" id="cep" size="70" maxlength="60" />
        <span class="style1">*</span></td>
    </tr>
    <tr>
      <td>Orientador:</td>
      <td><select name="orientador" id="orientador">
        <option>Selecione o orientador...</option>
        <!-- select da tabela de orientador pegando o nome --><option value=""></option>
      <span class="style1">*</span></td>
      </tr>
      <tr>
      <td>Supervisor:</td>
      <td><select name="supervisor" id="supervisor">
        <option>Selecione o supervisor...</option>
        <!-- select da tabela de supervisor pegando o nome --><option value=""></option>
      <span class="style1">*</span></td>
      </tr>
    <tr>
      <td>Login:</td>
      <td><input name="login" type="text" id="login" maxlength="12" />
        <span class="style1">*</span></td>
    </tr>
    <tr>
      <td>Senha:</td>
      <td><input name="senha" type="password" id="senha" maxlength="12" />
          <span class="style1">*</span></td>
    </tr>
    <tr>
      <td colspan="2"><p>
              {{csrf_field()}}
        <input name="cadastrar" type="submit" id="cadastrar" value="Proximo ->>" /> 
        <br />
          <input name="limpar" type="reset" id="limpar" value="Limpar Campos preenchidos!" />
          <br />
          <span class="style1">* Campos com * s&atilde;o obrigat&oacute;rios!</span></p>
      <p>&nbsp;</p></td>
    </tr>
  </table>
</form>
</body>
</html>
