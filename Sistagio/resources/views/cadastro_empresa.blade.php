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
			if(document.cadastro.cnpj.value=="")
			{
			alert("O Campo cnpj é obrigatório!");
			return false;
			}
                else
			if(document.cadastro.email.value=="")
			{
			alert("O Campo email é obrigatório!");
			return false;
			}
                else
			if(document.cadastro.site.value=="")
			{
			alert("O Campo site é obrigatório!");
			return false;
			}
                else
			if(document.cadastro.telefone.value=="")
			{
			alert("O Campo telefone é obrigatório!");
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
			if(document.cadastro.cep.value=="")
			{
			alert("O Campo cep é obrigatório!");
			return false;
			}
               else
			if(document.cadastro.estado.value=="")
			{
			alert("O Campo estado é obrigatório!");
			return false;
			}
               else
			if(document.cadastro.area.value=="")
			{
			alert("O Campo area é obrigatório!");
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
      <td>Dados da empresa onde sera efetuado o estagio</td>
    <tr>
      <td width="69">Nome:</td>
      <td width="546"><input name="nome" type="text" id="nome" size="70" maxlength="60" />
        <span class="style1">*</span></td>
    </tr>
    <tr>
      <td>CNPJ:</td>
        <td width="546"><input name="cnpj" type="text" id="cnpj" />
        <span class="style3">Apenas n&uacute;meros</span> </td>
    </tr>
    <tr>
      <td width="69">Email:</td>
      <td width="546"><input name="email" type="text" id="email" size="70" maxlength="60" />
        <span class="style1">*</span></td>
    </tr>
    <tr>
      <td width="69">Site:</td>
      <td width="546"><input name="site" type="text" id="site" size="70" maxlength="60" /></td>
    </tr>
    <tr>
      <td>Telefone:</td>
        <td width="546"><input name="telefone" type="text" id="telefone" />
        <span class="style3">Apenas n&uacute;meros</span> </td>
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
      <td width="546"><input name="numero" type="text" id="numero" size="70" maxlength="60" /></td>
    </tr>
    <tr>
      <td width="69">Cep:</td>
      <td width="546"><input name="cep" type="text" id="cep" size="70" maxlength="60" />
        <span class="style1">*</span></td>
    </tr>
    <tr>
      <td>Estado:</td>
      <td><select name="estado" id="estado">
        <option>Selecione...</option>
        <option value="AC">AC</option>
        <option value="AL">AL</option>
        <option value="AP">AP</option>
        <option value="AM">AM</option>
        <option value="BA">BA</option>
        <option value="CE">CE</option>
        <option value="ES">ES</option>
        <option value="DF">DF</option>
        <option value="MA">MA</option>
        <option value="MT">MT</option>
        <option value="MS">MS</option>
        <option value="MG">MG</option>
        <option value="PA">PA</option>
        <option value="PB">PB</option>
        <option value="PR">PR</option>
        <option value="PE">PE</option>
        <option value="PI">PI</option>
        <option value="RJ">RJ</option>
        <option value="RN">RN</option>
        <option value="RS">RS</option>
        <option value="RO">RO</option>
        <option value="RR">RR</option>
        <option value="SC">SC</option>
        <option value="SP">SP</option>
        <option value="SE">SE</option>
        <option value="TO">TO</option>
          </select>
        <span class="style1">*      </span></td>
    </tr>
    <tr>
      <td width="69">Area:</td>
      <td width="546"><textarea name="area" type="text" id="area" size="70" maxlength="60" />
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
      <p>&nbsp; </p></td>
    </tr>
  </table>
</form>
</body>
</html>
