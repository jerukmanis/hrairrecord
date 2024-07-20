<?php

namespace PHPMaker2022\HolisRegencyAirRecordAll;

// Page object
$Air2310View = &$Page;
?>
<?php if (!$Page->isExport()) { ?>
<script>
var currentTable = <?= JsonEncode($Page->toClientVar()) ?>;
ew.deepAssign(ew.vars, { tables: { air2310: currentTable } });
var currentForm, currentPageID;
var fair2310view;
loadjs.ready(["wrapper", "head"], function () {
    var $ = jQuery;
    // Form object
    fair2310view = new ew.Form("fair2310view", "view");
    currentPageID = ew.PAGE_ID = "view";
    currentForm = fair2310view;
    loadjs.done("fair2310view");
});
</script>
<script>
loadjs.ready("head", function () {
    // Write your table-specific client script here, no need to add script tags.
});
</script>
<?php } ?>
<?php if (!$Page->isExport()) { ?>
<div class="btn-toolbar ew-toolbar">
<?php $Page->ExportOptions->render("body") ?>
<?php $Page->OtherOptions->render("body") ?>
</div>
<?php } ?>
<?php $Page->showPageHeader(); ?>
<?php
$Page->showMessage();
?>
<form name="fair2310view" id="fair2310view" class="ew-form ew-view-form" action="<?= CurrentPageUrl(false) ?>" method="post">
<?php if (Config("CHECK_TOKEN")) { ?>
<input type="hidden" name="<?= $TokenNameKey ?>" value="<?= $TokenName ?>"><!-- CSRF token name -->
<input type="hidden" name="<?= $TokenValueKey ?>" value="<?= $TokenValue ?>"><!-- CSRF token value -->
<?php } ?>
<input type="hidden" name="t" value="air2310">
<input type="hidden" name="modal" value="<?= (int)$Page->IsModal ?>">
<table class="table table-striped table-bordered table-hover table-sm ew-view-table">
<?php if ($Page->id->Visible) { // id ?>
    <tr id="r_id"<?= $Page->id->rowAttributes() ?>>
        <td class="<?= $Page->TableLeftColumnClass ?>"><span id="elh_air2310_id"><?= $Page->id->caption() ?></span></td>
        <td data-name="id"<?= $Page->id->cellAttributes() ?>>
<span id="el_air2310_id">
<span<?= $Page->id->viewAttributes() ?>>
<?= $Page->id->getViewValue() ?></span>
</span>
</td>
    </tr>
<?php } ?>
<?php if ($Page->bulan->Visible) { // bulan ?>
    <tr id="r_bulan"<?= $Page->bulan->rowAttributes() ?>>
        <td class="<?= $Page->TableLeftColumnClass ?>"><span id="elh_air2310_bulan"><?= $Page->bulan->caption() ?></span></td>
        <td data-name="bulan"<?= $Page->bulan->cellAttributes() ?>>
<span id="el_air2310_bulan">
<span<?= $Page->bulan->viewAttributes() ?>>
<?= $Page->bulan->getViewValue() ?></span>
</span>
</td>
    </tr>
<?php } ?>
<?php if ($Page->unit->Visible) { // unit ?>
    <tr id="r_unit"<?= $Page->unit->rowAttributes() ?>>
        <td class="<?= $Page->TableLeftColumnClass ?>"><span id="elh_air2310_unit"><?= $Page->unit->caption() ?></span></td>
        <td data-name="unit"<?= $Page->unit->cellAttributes() ?>>
<span id="el_air2310_unit">
<span<?= $Page->unit->viewAttributes() ?>>
<?= $Page->unit->getViewValue() ?></span>
</span>
</td>
    </tr>
<?php } ?>
<?php if ($Page->meteran_bulansebelumnya->Visible) { // meteran_bulansebelumnya ?>
    <tr id="r_meteran_bulansebelumnya"<?= $Page->meteran_bulansebelumnya->rowAttributes() ?>>
        <td class="<?= $Page->TableLeftColumnClass ?>"><span id="elh_air2310_meteran_bulansebelumnya"><?= $Page->meteran_bulansebelumnya->caption() ?></span></td>
        <td data-name="meteran_bulansebelumnya"<?= $Page->meteran_bulansebelumnya->cellAttributes() ?>>
<span id="el_air2310_meteran_bulansebelumnya">
<span<?= $Page->meteran_bulansebelumnya->viewAttributes() ?>>
<?= $Page->meteran_bulansebelumnya->getViewValue() ?></span>
</span>
</td>
    </tr>
<?php } ?>
<?php if ($Page->meteran_bulanini->Visible) { // meteran_bulanini ?>
    <tr id="r_meteran_bulanini"<?= $Page->meteran_bulanini->rowAttributes() ?>>
        <td class="<?= $Page->TableLeftColumnClass ?>"><span id="elh_air2310_meteran_bulanini"><?= $Page->meteran_bulanini->caption() ?></span></td>
        <td data-name="meteran_bulanini"<?= $Page->meteran_bulanini->cellAttributes() ?>>
<span id="el_air2310_meteran_bulanini">
<span<?= $Page->meteran_bulanini->viewAttributes() ?>>
<?= $Page->meteran_bulanini->getViewValue() ?></span>
</span>
</td>
    </tr>
<?php } ?>
<?php if ($Page->foto->Visible) { // foto ?>
    <tr id="r_foto"<?= $Page->foto->rowAttributes() ?>>
        <td class="<?= $Page->TableLeftColumnClass ?>"><span id="elh_air2310_foto"><?= $Page->foto->caption() ?></span></td>
        <td data-name="foto"<?= $Page->foto->cellAttributes() ?>>
<span id="el_air2310_foto">
<span<?= $Page->foto->viewAttributes() ?>>
<?= GetFileViewTag($Page->foto, $Page->foto->getViewValue(), false) ?>
</span>
</span>
</td>
    </tr>
<?php } ?>
</table>
</form>
<?php
$Page->showPageFooter();
echo GetDebugMessage();
?>
<?php if (!$Page->isExport()) { ?>
<script>
loadjs.ready("load", function () {
    // Write your table-specific startup script here, no need to add script tags.
});
</script>
<?php } ?>
