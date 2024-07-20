<?php

namespace PHPMaker2022\HolisRegencyAirRecordAll;

// Page object
$Air2406Add = &$Page;
?>
<script>
var currentTable = <?= JsonEncode($Page->toClientVar()) ?>;
ew.deepAssign(ew.vars, { tables: { air2406: currentTable } });
var currentForm, currentPageID;
var fair2406add;
loadjs.ready(["wrapper", "head"], function () {
    var $ = jQuery;
    // Form object
    fair2406add = new ew.Form("fair2406add", "add");
    currentPageID = ew.PAGE_ID = "add";
    currentForm = fair2406add;

    // Add fields
    var fields = currentTable.fields;
    fair2406add.addFields([
        ["bulan", [fields.bulan.visible && fields.bulan.required ? ew.Validators.required(fields.bulan.caption) : null], fields.bulan.isInvalid],
        ["unit", [fields.unit.visible && fields.unit.required ? ew.Validators.required(fields.unit.caption) : null], fields.unit.isInvalid],
        ["meteran_bulansebelumnya", [fields.meteran_bulansebelumnya.visible && fields.meteran_bulansebelumnya.required ? ew.Validators.required(fields.meteran_bulansebelumnya.caption) : null, ew.Validators.integer], fields.meteran_bulansebelumnya.isInvalid],
        ["meteran_bulanini", [fields.meteran_bulanini.visible && fields.meteran_bulanini.required ? ew.Validators.required(fields.meteran_bulanini.caption) : null, ew.Validators.integer], fields.meteran_bulanini.isInvalid],
        ["foto", [fields.foto.visible && fields.foto.required ? ew.Validators.fileRequired(fields.foto.caption) : null], fields.foto.isInvalid]
    ]);

    // Form_CustomValidate
    fair2406add.customValidate = function(fobj) { // DO NOT CHANGE THIS LINE!
        // Your custom validation code here, return false if invalid.
        return true;
    }

    // Use JavaScript validation or not
    fair2406add.validateRequired = ew.CLIENT_VALIDATE;

    // Dynamic selection lists
    loadjs.done("fair2406add");
});
</script>
<script>
loadjs.ready("head", function () {
    // Write your table-specific client script here, no need to add script tags.
});
</script>
<?php $Page->showPageHeader(); ?>
<?php
$Page->showMessage();
?>
<form name="fair2406add" id="fair2406add" class="<?= $Page->FormClassName ?>" action="<?= CurrentPageUrl(false) ?>" method="post">
<?php if (Config("CHECK_TOKEN")) { ?>
<input type="hidden" name="<?= $TokenNameKey ?>" value="<?= $TokenName ?>"><!-- CSRF token name -->
<input type="hidden" name="<?= $TokenValueKey ?>" value="<?= $TokenValue ?>"><!-- CSRF token value -->
<?php } ?>
<input type="hidden" name="t" value="air2406">
<input type="hidden" name="action" id="action" value="insert">
<input type="hidden" name="modal" value="<?= (int)$Page->IsModal ?>">
<input type="hidden" name="<?= $Page->OldKeyName ?>" value="<?= $Page->OldKey ?>">
<div class="ew-add-div"><!-- page* -->
<?php if ($Page->bulan->Visible) { // bulan ?>
    <div id="r_bulan"<?= $Page->bulan->rowAttributes() ?>>
        <label id="elh_air2406_bulan" for="x_bulan" class="<?= $Page->LeftColumnClass ?>"><?= $Page->bulan->caption() ?><?= $Page->bulan->Required ? $Language->phrase("FieldRequiredIndicator") : "" ?></label>
        <div class="<?= $Page->RightColumnClass ?>"><div<?= $Page->bulan->cellAttributes() ?>>
<span id="el_air2406_bulan">
<input type="<?= $Page->bulan->getInputTextType() ?>" name="x_bulan" id="x_bulan" data-table="air2406" data-field="x_bulan" value="<?= $Page->bulan->EditValue ?>" size="30" maxlength="255" placeholder="<?= HtmlEncode($Page->bulan->getPlaceHolder()) ?>"<?= $Page->bulan->editAttributes() ?> aria-describedby="x_bulan_help">
<?= $Page->bulan->getCustomMessage() ?>
<div class="invalid-feedback"><?= $Page->bulan->getErrorMessage() ?></div>
</span>
</div></div>
    </div>
<?php } ?>
<?php if ($Page->unit->Visible) { // unit ?>
    <div id="r_unit"<?= $Page->unit->rowAttributes() ?>>
        <label id="elh_air2406_unit" for="x_unit" class="<?= $Page->LeftColumnClass ?>"><?= $Page->unit->caption() ?><?= $Page->unit->Required ? $Language->phrase("FieldRequiredIndicator") : "" ?></label>
        <div class="<?= $Page->RightColumnClass ?>"><div<?= $Page->unit->cellAttributes() ?>>
<span id="el_air2406_unit">
<input type="<?= $Page->unit->getInputTextType() ?>" name="x_unit" id="x_unit" data-table="air2406" data-field="x_unit" value="<?= $Page->unit->EditValue ?>" size="30" maxlength="255" placeholder="<?= HtmlEncode($Page->unit->getPlaceHolder()) ?>"<?= $Page->unit->editAttributes() ?> aria-describedby="x_unit_help">
<?= $Page->unit->getCustomMessage() ?>
<div class="invalid-feedback"><?= $Page->unit->getErrorMessage() ?></div>
</span>
</div></div>
    </div>
<?php } ?>
<?php if ($Page->meteran_bulansebelumnya->Visible) { // meteran_bulansebelumnya ?>
    <div id="r_meteran_bulansebelumnya"<?= $Page->meteran_bulansebelumnya->rowAttributes() ?>>
        <label id="elh_air2406_meteran_bulansebelumnya" for="x_meteran_bulansebelumnya" class="<?= $Page->LeftColumnClass ?>"><?= $Page->meteran_bulansebelumnya->caption() ?><?= $Page->meteran_bulansebelumnya->Required ? $Language->phrase("FieldRequiredIndicator") : "" ?></label>
        <div class="<?= $Page->RightColumnClass ?>"><div<?= $Page->meteran_bulansebelumnya->cellAttributes() ?>>
<span id="el_air2406_meteran_bulansebelumnya">
<input type="<?= $Page->meteran_bulansebelumnya->getInputTextType() ?>" name="x_meteran_bulansebelumnya" id="x_meteran_bulansebelumnya" data-table="air2406" data-field="x_meteran_bulansebelumnya" value="<?= $Page->meteran_bulansebelumnya->EditValue ?>" size="30" placeholder="<?= HtmlEncode($Page->meteran_bulansebelumnya->getPlaceHolder()) ?>"<?= $Page->meteran_bulansebelumnya->editAttributes() ?> aria-describedby="x_meteran_bulansebelumnya_help">
<?= $Page->meteran_bulansebelumnya->getCustomMessage() ?>
<div class="invalid-feedback"><?= $Page->meteran_bulansebelumnya->getErrorMessage() ?></div>
</span>
</div></div>
    </div>
<?php } ?>
<?php if ($Page->meteran_bulanini->Visible) { // meteran_bulanini ?>
    <div id="r_meteran_bulanini"<?= $Page->meteran_bulanini->rowAttributes() ?>>
        <label id="elh_air2406_meteran_bulanini" for="x_meteran_bulanini" class="<?= $Page->LeftColumnClass ?>"><?= $Page->meteran_bulanini->caption() ?><?= $Page->meteran_bulanini->Required ? $Language->phrase("FieldRequiredIndicator") : "" ?></label>
        <div class="<?= $Page->RightColumnClass ?>"><div<?= $Page->meteran_bulanini->cellAttributes() ?>>
<span id="el_air2406_meteran_bulanini">
<input type="<?= $Page->meteran_bulanini->getInputTextType() ?>" name="x_meteran_bulanini" id="x_meteran_bulanini" data-table="air2406" data-field="x_meteran_bulanini" value="<?= $Page->meteran_bulanini->EditValue ?>" size="30" placeholder="<?= HtmlEncode($Page->meteran_bulanini->getPlaceHolder()) ?>"<?= $Page->meteran_bulanini->editAttributes() ?> aria-describedby="x_meteran_bulanini_help">
<?= $Page->meteran_bulanini->getCustomMessage() ?>
<div class="invalid-feedback"><?= $Page->meteran_bulanini->getErrorMessage() ?></div>
</span>
</div></div>
    </div>
<?php } ?>
<?php if ($Page->foto->Visible) { // foto ?>
    <div id="r_foto"<?= $Page->foto->rowAttributes() ?>>
        <label id="elh_air2406_foto" class="<?= $Page->LeftColumnClass ?>"><?= $Page->foto->caption() ?><?= $Page->foto->Required ? $Language->phrase("FieldRequiredIndicator") : "" ?></label>
        <div class="<?= $Page->RightColumnClass ?>"><div<?= $Page->foto->cellAttributes() ?>>
<span id="el_air2406_foto">
<div id="fd_x_foto" class="fileinput-button ew-file-drop-zone">
    <input type="file" class="form-control ew-file-input" title="<?= $Page->foto->title() ?>" data-table="air2406" data-field="x_foto" name="x_foto" id="x_foto" lang="<?= CurrentLanguageID() ?>"<?= $Page->foto->editAttributes() ?> aria-describedby="x_foto_help"<?= ($Page->foto->ReadOnly || $Page->foto->Disabled) ? " disabled" : "" ?>>
    <div class="text-muted ew-file-text"><?= $Language->phrase("ChooseFile") ?></div>
</div>
<?= $Page->foto->getCustomMessage() ?>
<div class="invalid-feedback"><?= $Page->foto->getErrorMessage() ?></div>
<input type="hidden" name="fn_x_foto" id= "fn_x_foto" value="<?= $Page->foto->Upload->FileName ?>">
<input type="hidden" name="fa_x_foto" id= "fa_x_foto" value="0">
<input type="hidden" name="fs_x_foto" id= "fs_x_foto" value="0">
<input type="hidden" name="fx_x_foto" id= "fx_x_foto" value="<?= $Page->foto->UploadAllowedFileExt ?>">
<input type="hidden" name="fm_x_foto" id= "fm_x_foto" value="<?= $Page->foto->UploadMaxFileSize ?>">
<table id="ft_x_foto" class="table table-sm float-start ew-upload-table"><tbody class="files"></tbody></table>
</span>
</div></div>
    </div>
<?php } ?>
</div><!-- /page* -->
<?php if (!$Page->IsModal) { ?>
<div class="row"><!-- buttons .row -->
    <div class="<?= $Page->OffsetColumnClass ?>"><!-- buttons offset -->
<button class="btn btn-primary ew-btn" name="btn-action" id="btn-action" type="submit"><?= $Language->phrase("AddBtn") ?></button>
<button class="btn btn-default ew-btn" name="btn-cancel" id="btn-cancel" type="button" data-href="<?= HtmlEncode(GetUrl($Page->getReturnUrl())) ?>"><?= $Language->phrase("CancelBtn") ?></button>
    </div><!-- /buttons offset -->
</div><!-- /buttons .row -->
<?php } ?>
</form>
<?php
$Page->showPageFooter();
echo GetDebugMessage();
?>
<script>
// Field event handlers
loadjs.ready("head", function() {
    ew.addEventHandlers("air2406");
});
</script>
<script>
loadjs.ready("load", function () {
    // Write your table-specific startup script here, no need to add script tags.
});
</script>
