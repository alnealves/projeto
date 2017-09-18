<!DOCTYPE>
<html>
<head>
<meta charset="iso-8859-1" />
<title>CADASTRO DE ALUNO</title>

<script type="text/javascript">
		function validaCampo()
		{
		if(document.cadastro.obtencao.value=="")
			{
			alert("O Campo obtencao é obrigatório!");
			return false;
			}
		else
			if(document.cadastro.horas.value=="")
			{
			alert("O Campo horas é obrigatório!");
			return false;
			}
                else
			if(document.cadastro.inicio.value=="")
			{
			alert("O Campo inicio é obrigatório!");
			return false;
			}
                else
			if(document.cadastro.fim.value=="")
			{
			alert("O Campo fim é obrigatório!");
			return false;
			}
                else
			if(document.cadastro.setor.value=="")
			{
			alert("O Campo setor é obrigatório!");
			return false;
			}
                else
			if(document.cadastro.atividades.value=="")
			{
			alert("O Campo atividades é obrigatório!");
			return false;
			}
                else
			if(document.cadastro.observacoes.value=="")
			{
			alert("O Campo observacoes é obrigatório!");
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
      <td>Os dados a seguir sao pertinentes ao seu estagio</td>
    <tr>
      <td>Obtencao:</td>
      <td>Sim
          <input name="obtencao" type="radio" value="sim" checked="checked" id="obtencao"/>
        Nao
        <input name="obtencao" type="radio" value="nao" id="obtencao"/>
         <span class="style1">*</span> </td>
    </tr>
    <tr>
      <td width="69">Horas:</td>
      <td width="546"><input name="horas" type="text" id="horas" size="70" maxlength="60" />
        <span class="style1">*</span></td>
    </tr>
    <tr>
      <td width="69">Inicio:</td>
      <td width="546"><input name="inicio" type="text" id="inicio" size="70" maxlength="60" />
        <span class="style1">*</span></td>
    </tr>
    <tr>
      <td width="69">Fim:</td>
      <td width="546"><input name="fim" type="text" id="fim" size="70" maxlength="60" /></td>
    </tr>
    <tr>
      <td width="69">Setor:</td>
      <td width="546"><input name="setor" type="text" id="setor" size="70" maxlength="60" />
        <span class="style1">*</span></td>
    </tr>
    <tr>
      <td>Atividades:</td>
      <td width="546"><textarea name="atividades" type="text" id="atividades" /></td>
    </tr>
    <tr>
      <td>Observacoes:</td>
      <td width="546"><textarea name="observacoes" type="text" id="observacoes" /></td>
    </tr>
    <tr>
      <td colspan="2"><p>
              {{csrf_field()}}
        <input name="cadastrar" type="submit" id="cadastrar" value="Finalizar" /> 
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
