<table style="visibility:hidden">
  <tr class="crm-mosaico-form-block-mosaico_extras_textcolor_map">
    <td class="label">{ts}Mosaico plugin textcolor{/ts}</td>
    <td>
      <input type="text" name="mosaico_extras_textcolor_map" id="mosaico-extras-textcolor-map" class="huge40 crm-form-text" /><br />
      <span class="description">{ts}Define palette colors in mosaico editor. Format: [Label]:[hex value]<br>
        Example: Black:000000,White:ffffff,Dark Gray:333333,Gray:7a6e67,Blue:10069F...{/ts}</span>
    </td>
  </tr>
</table>

<script type="text/javascript">
  var table = CRM.$('.crm-mosaico-form-block .form-layout');
  CRM.$('.crm-mosaico-form-block-mosaico_extras_textcolor_map').appendTo(table);
  CRM.$('#mosaico-extras-textcolor-map').val(CRM.vars.mosaico.mosaico_extras_textcolor_map);
</script>

