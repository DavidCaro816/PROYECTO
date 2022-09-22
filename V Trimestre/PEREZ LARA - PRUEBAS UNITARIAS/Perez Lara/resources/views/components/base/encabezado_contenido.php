<header class="header_main">
    <div class="group_header_main">
        <h1 id="title">
            <?php
            if(isset($title)){
                echo $title;
            }
            ?>
        </h1>
        <section class="new_action">
            <button id="new_button" class="button2 primary_button" type="button" data-toggle="modal2" data-target="backdrop">
                <img src="../resources/icons/buttons/new_button.svg" alt="">Nuevo
            </button>
            <div id="backdrop" class="backdrop">
            <?php
            if (isset($modal)){
                require_once '../resources/views/components/contenido/' . $modal;
            }
            ?>
            </div>
        </section>
        <?php require_once '../resources/views/components/search.php'; ?>
    </div>
    <div class="group_header_main">
        <a id="pdf" href="#" role="button" class="button2 button_download">
            <div id="type_pdf" class="button2 quinary_button">
                <img src="../resources/icons/buttons/pdf.svg" alt="">
                <span>PDF</span>
            </div>
            <div class="download">
                <svg class="css-i6dzq1" stroke-linejoin="round" stroke-linecap="round" fill="none" stroke-width="2"
                stroke="#ffffff" height="24" width="24" viewBox="0 0 24 24">
                    <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                    <polyline points="7 10 12 15 17 10"></polyline>
                    <line y2="3" x2="12" y1="15" x1="12"></line>
                </svg>
            </div>
        </a>
        <a id="excel" href="#" role="button" class="button2 button_download">
            <div id="type_excel" class="button2 quinary_button">
                <img src="../resources/icons/buttons/excel.svg" alt="">
                <span>Excel</span>
            </div>
            <div class="download">
                <svg class="css-i6dzq1" stroke-linejoin="round" stroke-linecap="round" fill="none" stroke-width="2"
                stroke="#ffffff" height="24" width="24" viewBox="0 0 24 24">
                    <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                    <polyline points="7 10 12 15 17 10"></polyline>
                    <line y2="3" x2="12" y1="15" x1="12"></line>
                </svg>
            </div>
        </a>
    </div>
</header>