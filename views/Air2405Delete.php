<?php

namespace PHPMaker2022\HolisRegencyAirRecordAll;

// Page object
$Air2405Delete = &$Page;
?>
<script>
var currentTable = <?= JsonEncode($Page->toClientVar()) ?>;
ew.deepAssign(ew.vars, { tables: { air2405: currentTable } });
var currentForm, currentPageID;
var fair2405delete;
loadjs.ready(["wrapper", "head"], function () {
    var $ = jQuery;
    // Form object
    fair2405delete = new ew.Form("fair2405delete", "delete");
    currentPageID = ew.PAGE_ID = "delete";
    currentForm = fair2405delete;
    loadjs.done("fair2405delete");
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
<form name="fair2405delete" id="fair2405delete" class="ew-form ew-delete-form" action="<?= CurrentPageUrl(false) ?>" method="post">
<?php if (Config("CHECK_TOKEN")) { ?>
<input type="hidden" name="<?= $TokenNameKey ?>" value="<?= $TokenName ?>"><!-- CSRF token name -->
<input type="hidden" name="<?= $TokenValueKey ?>" value="<?= $TokenValue ?>"><!-- CSRF token value -->
<?php } ?>
<input type="hidden" name="t" value="air2405">
<input type="hidden" name="action" id="action" value="delete">
<?php foreach ($Page->RecKeys as $key) { ?>
<?php $keyvalue = is_array($key) ? implode(Config("COMPOSITE_KEY_SEPARATOR"), $key) : $key; ?>
<input type="hidden" name="key_m[]" value="<?= HtmlEncode($keyvalue) ?>">
<?php } ?>
<div class="card ew-card ew-grid">
<div class="<?= ResponsiveTableClass() ?>card-body ew-grid-middle-panel">
<table class="table table-bordered table-hover table-sm ew-table">
    <thead>
    <tr class="ew-table-header">
<?php if ($Page->id->Visible) { // id ?>
        <th class="<?= $Page->id->headerCellClass() ?>"><span id="elh_air2405_id" class="air2405_id"><?= $Page->id->caption() ?></span></th>
<?php } ?>
<?php if ($Page->bulan->Visible) { // bulan ?>
        <th class="<?= $Page->bulan->headerCellClass() ?>"><span id="elh_air2405_bulan" class="air2405_bulan"><?= $Page->bulan->caption() ?></span></th>
<?php } ?>
<?php if ($Page->unit->Visible) { // unit ?>
        <th class="<?= $Page->unit->headerCellClass() ?>"><span id="elh_air2405_unit" class="air2405_unit"><?= $Page->unit->caption() ?></span></th>
<?php } ?>
<?php if ($Page->meteran_bulansebelumnya->Visible) { // meteran_bulansebelumnya ?>
        <th class="<?= $Page->meteran_bulansebelumnya->headerCellClass() ?>"><span id="elh_air2405_meteran_bulansebelumnya" class="air2405_meteran_bulansebelumnya"><?= $Page->meteran_bulansebelumnya->caption() ?></span></th>
<?php } ?>
<?php if ($Page->meteran_bulanini->Visible) { // meteran_bulanini ?>
        <th class="<?= $Page->meteran_bulanini->headerCellClass() ?>"><span id="elh_air2405_meteran_bulanini" class="air2405_meteran_bulanini"><?= $Page->meteran_bulanini->caption() ?></span></th>
<?php } ?>
    </tr>
    </thead>
    <tbody>
<?php
$Page->RecordCount = 0;
$i = 0;
while (!$Page->Recordset->EOF) {
    $Page->RecordCount++;
    $Page->RowCount++;

    // Set row properties
    $Page->resetAttributes();
    $Page->RowType = ROWTYPE_VIEW; // View

    // Get the field contents
    $Page->loadRowValues($Page->Recordset);

    // Render row
    $Page->renderRow();
?>
    <tr <?= $Page->rowAttributes() ?>>
<?php if ($Page->id->Visible) { // id ?>
        <td<?= $Page->id->cellAttributes() ?>>
<span id="el<?= $Page->RowCount ?>_air2405_id" class="el_air2405_id">
<span<?= $Page->id->viewAttributes() ?>>
<?= $Page->id->getViewValue() ?></span>
</span>
</td>
<?php } ?>
<?php if ($Page->bulan->Visible) { // bulan ?>
        <td<?= $Page->bulan->cellAttributes() ?>>
<span id="el<?= $Page->RowCount ?>_air2405_bulan" class="el_air2405_bulan">
<span<?= $Page->bulan->viewAttributes() ?>>
<?= $Page->bulan->getViewValue() ?></span>
</span>
</td>
<?php } ?>
<?php if ($Page->unit->Visible) { // unit ?>
        <td<?= $Page->unit->cellAttributes() ?>>
<span id="el<?= $Page->RowCount ?>_air2405_unit" class="el_air2405_unit">
<span<?= $Page->unit->viewAttributes() ?>>
<?= $Page->unit->getViewValue() ?></span>
</span>
</td>
<?php } ?>
<?php if ($Page->meteran_bulansebelumnya->Visible) { // meteran_bulansebelumnya ?>
        <td<?= $Page->meteran_bulansebelumnya->cellAttributes() ?>>
<span id="el<?= $Page->RowCount ?>_air2405_meteran_bulansebelumnya" class="el_air2405_meteran_bulansebelumnya">
<span<?= $Page->meteran_bulansebelumnya->viewAttributes() ?>>
<?= $Page->meteran_bulansebelumnya->getViewValue() ?></span>
</span>
</td>
<?php } ?>
<?php if ($Page->meteran_bulanini->Visible) { // meteran_bulanini ?>
        <td<?= $Page->meteran_bulanini->cellAttributes() ?>>
<span id="el<?= $Page->RowCount ?>_air2405_meteran_bulanini" class="el_air2405_meteran_bulanini">
<span<?= $Page->meteran_bulanini->viewAttributes() ?>>
<?= $Page->meteran_bulanini->getViewValue() ?></span>
</span>
</td>
<?php } ?>
    </tr>
<?php
    $Page->Recordset->moveNext();
}
$Page->Recordset->close();
?>
</tbody>
</table>
</div>
</div>
<div>
<button class="btn btn-primary ew-btn" name="btn-action" id="btn-action" type="submit"><?= $Language->phrase("DeleteBtn") ?></button>
<button class="btn btn-default ew-btn" name="btn-cancel" id="btn-cancel" type="button" data-href="<?= HtmlEncode(GetUrl($Page->getReturnUrl())) ?>"><?= $Language->phrase("CancelBtn") ?></button>
</div>
</form>
<?php
$Page->showPageFooter();
echo GetDebugMessage();
?>
<script>
loadjs.ready("load", function () {
    // Write your table-specific startup script here, no need to add script tags.
});
</script>
