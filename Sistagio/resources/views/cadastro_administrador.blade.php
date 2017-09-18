<!DOCTYPE>
<html>
<head>
<meta charset="iso-8859-1" />
<title>CADASTRO DE EMPRESA</title>

<script type="text/javascript">
    function validaCampo()
		{
		if(document.cadastro.nome.value=="")
			{
			alert("O Campo nome é obrigatório!");
			return false;
			}
		else
			if(document.cadastro.sobrenome.value=="")
			{
			alert("O Campo sobrenome é obrigatório!");
			return false;
			}
                else
			if(document.cadastro.email.value=="")
			{
			alert("O Campo email é obrigatório!");
			return false;
			}
                else
			if(document.cadastro.telefone.value=="")
			{
			alert("O Campo telefone é obrigatório!");
			return false;
			}
                else
			if(document.cadastro.login.value=="")
			{
			alert("O Campo login é obrigatório!");
			return false;
			}
                else
			if(document.cadastro.senha.value=="")
			{
			alert("O Campo senha é obrigatório!");
			return false;
			}
               else
		return true;
		}
</script>
</head>

<body>
<form id="cadastro" name="cadastro" method="post" action="{{route('administrador.create')}}" onsubmit="return validaCampo(); return false;">
  <table width="625" border="0">
      <td>Preencha os dados do Administrador</td>
    <tr>
      <td width="69">Nome:</td>
      <td width="546"><input name="nome" type="text" id="nome" size="70" maxlength="60" />
        <span class="style1">*</span></td>
    </tr>
    <tr>
      <td>Sobrenome:</td>
        <td width="546"><input name="sobrenome" type="text" id="sobrenome" />
        <span class="style3">*</span> </td>
    </tr>
    <tr>
      <td width="69">Email:</td>
      <td width="546"><input name="email" type="text" id="email" size="70" maxlength="60" />
        <span class="style1">*</span></td>
    </tr>
    <tr>
      <td>Telefone:</td>
        <td width="546"><input name="telefone" type="text" id="telefone" />
        <span class="style3">Apenas n&uacute;meros</span> </td>
    </tr>
    <tr>
      <td>Login:</td>
        <td width="546"><input name="login" type="text" id="login" />
        <span class="style3">*</span> </td>
    </tr>
    <tr>
      <td>Senha:</td>
        <td width="546"><input name="senha" type="text" id="senha" />
        <span class="style3">*</span> </td>
    </tr>
    <tr>
      <td colspan="2"><p>
              {{csrf_field()}}
        <input name="cadastrar" type="submit" id="cadastrar" value="Finalizar" /> 
        <br />
          <input name="limpar" type="reset" id="limpar" value="Limpar Campos preenchidos!" />
          <br />
          <span class="style1">* Campos com * s&atilde;o obrigat&oacute;rios!</span></p>
      <p>&nbsp; </p></td>
    </tr>
  </table>
</form>
</body>
</html>
