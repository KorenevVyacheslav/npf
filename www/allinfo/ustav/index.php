<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Устав "); ?>

<div class="sng__section">
    <div class="container sng__container">
        <div class="sng__content">
            <div class="row">
                <div class="col-12">
                    <div class="sng__box">
                        <div class="sng__header">
                            <h1 class="sng__title"> Устав </h1>
                        </div>

                        <? $APPLICATION->IncludeComponent(
                            "custom:file.list",
                            ".default",
                            []
                        ); ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>
