<?php
    $totalItems = 8;
    $itemsPerPage = 6;
    $items = range(1, $totalItems);

    $pages = array_chunk($items, $itemsPerPage);

    foreach ($pages as $pageItems) {
        foreach ($pageItems as $item) {
            ?>
            <section class="pentagon">
                <svg
                    width="250"
                    height="250"
                    viewBox="-1 0 101 100"
                    xmlns="http://www.w3.org/2000/svg"
                >
                    <defs>
                        <pattern
                            id="imgPattern<?= $item ?>"
                            width="350"
                            height="350"
                            patternUnits="userSpaceOnUse"
                        >
                            <image
                                xlink:href="./img/<?= $item ?>.webp"
                                width="140%"
                                height="140%"
                                x="-20%"
                                y="-20%"
                                class="pentagon__img"
                            />
                        </pattern>
                    </defs>
                    <path
                        d="M20,0 L80,0 L100,60 L50,100 L0,60z"
                        stroke="black"
                        fill="url(#imgPattern<?= $item ?>)"
                    />
                </svg>
            </section>
            <?php
                if ($item == 7) {
            ?>
                <img src="./img/separator.jpeg" alt="separator" class="separator" />
            <?php 
            }
        }
    }
?>