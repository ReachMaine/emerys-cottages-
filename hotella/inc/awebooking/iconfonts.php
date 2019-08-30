<?php
function hotella_register_new_icons( $iconfonts ) {
    $iconpack = new \WP_Simple_Iconfonts\Iconpack(array(
        'id'             => 'hotella-icons',
        'name'           => 'Hotella Icons',
        'version'        => '1.0.0',
        'stylesheet_uri' => 'hotella-icons',
        'stylesheet_uri' => get_template_directory_uri() . '/css/iconfonts.css/',
        $groups = array(
            array(
                'id'   => 'admin',
                'name' => 'Admin',
            ),
            array(
                'id'   => 'post-formats',
                'name' => 'Post Formats',
            ),
        ),
        'icons'         => array(
            array(
                "id"    => "ti-wand",
                "name"  => "wand",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-volume",
                "name"  => "volume",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-user",
                "name"  => "user",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-unlock",
                "name"  => "unlock",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-unlink",
                "name"  => "unlink",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-trash",
                "name"  => "trash",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-thought",
                "name"  => "thought",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-target",
                "name"  => "target",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-tag",
                "name"  => "tag",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-tablet",
                "name"  => "tablet",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-star",
                "name"  => "star",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-spray",
                "name"  => "spray",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-signal",
                "name"  => "signal",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-shopping-cart",
                "name"  => "shopping",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-shopping-cart-full",
                "name"  => "shopping",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-settings",
                "name"  => "settings",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-search",
                "name"  => "search",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-zoom-in",
                "name"  => "zoom",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-zoom-out",
                "name"  => "zoom",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-cut",
                "name"  => "cut",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-ruler",
                "name"  => "ruler",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-ruler-pencil",
                "name"  => "ruler",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-ruler-alt",
                "name"  => "ruler",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-bookmark",
                "name"  => "bookmark",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-bookmark-alt",
                "name"  => "bookmark",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-reload",
                "name"  => "reload",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-plus",
                "name"  => "plus",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-pin",
                "name"  => "pin",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-pencil",
                "name"  => "pencil",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-pencil-alt",
                "name"  => "pencil",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-paint-roller",
                "name"  => "paint",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-paint-bucket",
                "name"  => "paint",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-na",
                "name"  => "na",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-mobile",
                "name"  => "mobile",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-minus",
                "name"  => "minus",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-medall",
                "name"  => "medall",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-medall-alt",
                "name"  => "medall",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-marker",
                "name"  => "marker",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-marker-alt",
                "name"  => "marker",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-arrow-up",
                "name"  => "arrow",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-arrow-right",
                "name"  => "arrow",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-arrow-left",
                "name"  => "arrow",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-arrow-down",
                "name"  => "arrow",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-lock",
                "name"  => "lock",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-location-arrow",
                "name"  => "location",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-link",
                "name"  => "link",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-layout",
                "name"  => "layout",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-layers",
                "name"  => "layers",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-layers-alt",
                "name"  => "layers",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-key",
                "name"  => "key",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-import",
                "name"  => "import",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-image",
                "name"  => "image",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-heart",
                "name"  => "heart",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-heart-broken",
                "name"  => "heart",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-hand-stop",
                "name"  => "hand",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-hand-open",
                "name"  => "hand",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-hand-drag",
                "name"  => "hand",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-folder",
                "name"  => "folder",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-flag",
                "name"  => "flag",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-flag-alt",
                "name"  => "flag",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-flag-alt-2",
                "name"  => "flag",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-eye",
                "name"  => "eye",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-export",
                "name"  => "export",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-exchange-vertical",
                "name"  => "exchange",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-desktop",
                "name"  => "desktop",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-cup",
                "name"  => "cup",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-crown",
                "name"  => "crown",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-comments",
                "name"  => "comments",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-comment",
                "name"  => "comment",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-comment-alt",
                "name"  => "comment",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-close",
                "name"  => "close",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-clip",
                "name"  => "clip",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-angle-up",
                "name"  => "angle",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-angle-right",
                "name"  => "angle",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-angle-left",
                "name"  => "angle",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-angle-down",
                "name"  => "angle",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-check",
                "name"  => "check",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-check-box",
                "name"  => "check",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-camera",
                "name"  => "camera",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-announcement",
                "name"  => "announcement",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-brush",
                "name"  => "brush",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-briefcase",
                "name"  => "briefcase",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-bolt",
                "name"  => "bolt",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-bolt-alt",
                "name"  => "bolt",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-blackboard",
                "name"  => "blackboard",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-bag",
                "name"  => "bag",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-move",
                "name"  => "move",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-arrows-vertical",
                "name"  => "arrows",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-arrows-horizontal",
                "name"  => "arrows",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-fullscreen",
                "name"  => "fullscreen",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-arrow-top-right",
                "name"  => "arrow",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-arrow-top-left",
                "name"  => "arrow",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-arrow-circle-up",
                "name"  => "arrow",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-arrow-circle-right",
                "name"  => "arrow",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-arrow-circle-left",
                "name"  => "arrow",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-arrow-circle-down",
                "name"  => "arrow",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-angle-double-up",
                "name"  => "angle",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-angle-double-right",
                "name"  => "angle",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-angle-double-left",
                "name"  => "angle",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-angle-double-down",
                "name"  => "angle",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-zip",
                "name"  => "zip",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-world",
                "name"  => "world",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-wheelchair",
                "name"  => "wheelchair",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-view-list",
                "name"  => "view",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-view-list-alt",
                "name"  => "view",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-view-grid",
                "name"  => "view",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-uppercase",
                "name"  => "uppercase",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-upload",
                "name"  => "upload",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-underline",
                "name"  => "underline",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-truck",
                "name"  => "truck",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-timer",
                "name"  => "timer",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-ticket",
                "name"  => "ticket",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-thumb-up",
                "name"  => "thumb",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-thumb-down",
                "name"  => "thumb",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-text",
                "name"  => "text",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-stats-up",
                "name"  => "stats",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-stats-down",
                "name"  => "stats",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-split-v",
                "name"  => "split",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-split-h",
                "name"  => "split",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-smallcap",
                "name"  => "smallcap",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-shine",
                "name"  => "shine",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-shift-right",
                "name"  => "shift",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-shift-left",
                "name"  => "shift",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-shield",
                "name"  => "shield",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-notepad",
                "name"  => "notepad",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-server",
                "name"  => "server",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-quote-right",
                "name"  => "quote",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-quote-left",
                "name"  => "quote",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-pulse",
                "name"  => "pulse",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-printer",
                "name"  => "printer",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-power-off",
                "name"  => "power",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-plug",
                "name"  => "plug",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-pie-chart",
                "name"  => "pie",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-paragraph",
                "name"  => "paragraph",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-panel",
                "name"  => "panel",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-package",
                "name"  => "package",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-music",
                "name"  => "music",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-music-alt",
                "name"  => "music",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-mouse",
                "name"  => "mouse",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-mouse-alt",
                "name"  => "mouse",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-money",
                "name"  => "money",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-microphone",
                "name"  => "microphone",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-menu",
                "name"  => "menu",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-menu-alt",
                "name"  => "menu",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-map",
                "name"  => "map",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-map-alt",
                "name"  => "map",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-loop",
                "name"  => "loop",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-location-pin",
                "name"  => "location",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-list",
                "name"  => "list",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-light-bulb",
                "name"  => "light",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-Italic",
                "name"  => "Italic",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-info",
                "name"  => "info",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-infinite",
                "name"  => "infinite",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-id-badge",
                "name"  => "id",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-hummer",
                "name"  => "hummer",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-home",
                "name"  => "home",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-help",
                "name"  => "help",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-headphone",
                "name"  => "headphone",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-harddrives",
                "name"  => "harddrives",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-harddrive",
                "name"  => "harddrive",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-gift",
                "name"  => "gift",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-game",
                "name"  => "game",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-filter",
                "name"  => "filter",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-files",
                "name"  => "files",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-file",
                "name"  => "file",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-eraser",
                "name"  => "eraser",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-envelope",
                "name"  => "envelope",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-download",
                "name"  => "download",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-direction",
                "name"  => "direction",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-direction-alt",
                "name"  => "direction",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-dashboard",
                "name"  => "dashboard",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-control-stop",
                "name"  => "control",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-control-shuffle",
                "name"  => "control",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-control-play",
                "name"  => "control",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-control-pause",
                "name"  => "control",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-control-forward",
                "name"  => "control",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-control-backward",
                "name"  => "control",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-cloud",
                "name"  => "cloud",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-cloud-up",
                "name"  => "cloud",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-cloud-down",
                "name"  => "cloud",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-clipboard",
                "name"  => "clipboard",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-car",
                "name"  => "car",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-calendar",
                "name"  => "calendar",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-book",
                "name"  => "book",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-bell",
                "name"  => "bell",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-basketball",
                "name"  => "basketball",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-bar-chart",
                "name"  => "bar",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-bar-chart-alt",
                "name"  => "bar",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-back-right",
                "name"  => "back",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-back-left",
                "name"  => "back",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-arrows-corner",
                "name"  => "arrows",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-archive",
                "name"  => "archive",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-anchor",
                "name"  => "anchor",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-align-right",
                "name"  => "align",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-align-left",
                "name"  => "align",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-align-justify",
                "name"  => "align",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-align-center",
                "name"  => "align",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-alert",
                "name"  => "alert",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-alarm-clock",
                "name"  => "alarm",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-agenda",
                "name"  => "agenda",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-write",
                "name"  => "write",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-window",
                "name"  => "window",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-widgetized",
                "name"  => "widgetized",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-widget",
                "name"  => "widget",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-widget-alt",
                "name"  => "widget",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-wallet",
                "name"  => "wallet",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-video-clapper",
                "name"  => "video",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-video-camera",
                "name"  => "video",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-vector",
                "name"  => "vector",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-themify-logo",
                "name"  => "themify",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-themify-favicon",
                "name"  => "themify",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-themify-favicon-alt",
                "name"  => "themify",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-support",
                "name"  => "support",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-stamp",
                "name"  => "stamp",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-split-v-alt",
                "name"  => "split",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-slice",
                "name"  => "slice",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-shortcode",
                "name"  => "shortcode",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-shift-right-alt",
                "name"  => "shift",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-shift-left-alt",
                "name"  => "shift",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-ruler-alt-2",
                "name"  => "ruler",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-receipt",
                "name"  => "receipt",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-pin2",
                "name"  => "pin2",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-pin-alt",
                "name"  => "pin",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-pencil-alt2",
                "name"  => "pencil",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-palette",
                "name"  => "palette",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-more",
                "name"  => "more",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-more-alt",
                "name"  => "more",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-microphone-alt",
                "name"  => "microphone",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-magnet",
                "name"  => "magnet",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-line-double",
                "name"  => "line",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-line-dotted",
                "name"  => "line",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-line-dashed",
                "name"  => "line",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-layout-width-full",
                "name"  => "layout",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-layout-width-default",
                "name"  => "layout",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-layout-width-default-alt",
                "name"  => "layout",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-layout-tab",
                "name"  => "layout",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-layout-tab-window",
                "name"  => "layout",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-layout-tab-v",
                "name"  => "layout",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-layout-tab-min",
                "name"  => "layout",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-layout-slider",
                "name"  => "layout",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-layout-slider-alt",
                "name"  => "layout",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-layout-sidebar-right",
                "name"  => "layout",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-layout-sidebar-none",
                "name"  => "layout",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-layout-sidebar-left",
                "name"  => "layout",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-layout-placeholder",
                "name"  => "layout",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-layout-menu",
                "name"  => "layout",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-layout-menu-v",
                "name"  => "layout",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-layout-menu-separated",
                "name"  => "layout",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-layout-menu-full",
                "name"  => "layout",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-layout-media-right-alt",
                "name"  => "layout",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-layout-media-right",
                "name"  => "layout",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-layout-media-overlay",
                "name"  => "layout",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-layout-media-overlay-alt",
                "name"  => "layout",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-layout-media-overlay-alt-2",
                "name"  => "layout",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-layout-media-left-alt",
                "name"  => "layout",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-layout-media-left",
                "name"  => "layout",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-layout-media-center-alt",
                "name"  => "layout",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-layout-media-center",
                "name"  => "layout",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-layout-list-thumb",
                "name"  => "layout",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-layout-list-thumb-alt",
                "name"  => "layout",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-layout-list-post",
                "name"  => "layout",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-layout-list-large-image",
                "name"  => "layout",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-layout-line-solid",
                "name"  => "layout",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-layout-grid4",
                "name"  => "layout",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-layout-grid3",
                "name"  => "layout",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-layout-grid2",
                "name"  => "layout",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-layout-grid2-thumb",
                "name"  => "layout",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-layout-cta-right",
                "name"  => "layout",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-layout-cta-left",
                "name"  => "layout",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-layout-cta-center",
                "name"  => "layout",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-layout-cta-btn-right",
                "name"  => "layout",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-layout-cta-btn-left",
                "name"  => "layout",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-layout-column4",
                "name"  => "layout",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-layout-column3",
                "name"  => "layout",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-layout-column2",
                "name"  => "layout",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-layout-accordion-separated",
                "name"  => "layout",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-layout-accordion-merged",
                "name"  => "layout",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-layout-accordion-list",
                "name"  => "layout",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-ink-pen",
                "name"  => "ink",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-info-alt",
                "name"  => "info",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-help-alt",
                "name"  => "help",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-headphone-alt",
                "name"  => "headphone",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-hand-point-up",
                "name"  => "hand",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-hand-point-right",
                "name"  => "hand",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-hand-point-left",
                "name"  => "hand",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-hand-point-down",
                "name"  => "hand",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-gallery",
                "name"  => "gallery",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-face-smile",
                "name"  => "face",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-face-sad",
                "name"  => "face",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-credit-card",
                "name"  => "credit",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-control-skip-forward",
                "name"  => "control",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-control-skip-backward",
                "name"  => "control",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-control-record",
                "name"  => "control",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-control-eject",
                "name"  => "control",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-comments-smiley",
                "name"  => "comments",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-brush-alt",
                "name"  => "brush",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-youtube",
                "name"  => "youtube",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-vimeo",
                "name"  => "vimeo",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-twitter",
                "name"  => "twitter",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-time",
                "name"  => "time",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-tumblr",
                "name"  => "tumblr",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-skype",
                "name"  => "skype",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-share",
                "name"  => "share",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-share-alt",
                "name"  => "share",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-rocket",
                "name"  => "rocket",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-pinterest",
                "name"  => "pinterest",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-new-window",
                "name"  => "new",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-microsoft",
                "name"  => "microsoft",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-list-ol",
                "name"  => "list",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-linkedin",
                "name"  => "linkedin",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-layout-sidebar-2",
                "name"  => "layout",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-layout-grid4-alt",
                "name"  => "layout",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-layout-grid3-alt",
                "name"  => "layout",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-layout-grid2-alt",
                "name"  => "layout",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-layout-column4-alt",
                "name"  => "layout",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-layout-column3-alt",
                "name"  => "layout",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-layout-column2-alt",
                "name"  => "layout",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-instagram",
                "name"  => "instagram",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-google",
                "name"  => "google",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-github",
                "name"  => "github",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-flickr",
                "name"  => "flickr",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-facebook",
                "name"  => "facebook",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-dropbox",
                "name"  => "dropbox",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-dribbble",
                "name"  => "dribbble",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-apple",
                "name"  => "apple",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-android",
                "name"  => "android",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-save",
                "name"  => "save",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-save-alt",
                "name"  => "save",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-yahoo",
                "name"  => "yahoo",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-wordpress",
                "name"  => "wordpress",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-vimeo-alt",
                "name"  => "vimeo",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-twitter-alt",
                "name"  => "twitter",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-tumblr-alt",
                "name"  => "tumblr",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-trello",
                "name"  => "trello",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-stack-overflow",
                "name"  => "stack",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-soundcloud",
                "name"  => "soundcloud",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-sharethis",
                "name"  => "sharethis",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-sharethis-alt",
                "name"  => "sharethis",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-reddit",
                "name"  => "reddit",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-pinterest-alt",
                "name"  => "pinterest",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-microsoft-alt",
                "name"  => "microsoft",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-linux",
                "name"  => "linux",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-jsfiddle",
                "name"  => "jsfiddle",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-joomla",
                "name"  => "joomla",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-html5",
                "name"  => "html5",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-flickr-alt",
                "name"  => "flickr",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-email",
                "name"  => "email",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-drupal",
                "name"  => "drupal",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-dropbox-alt",
                "name"  => "dropbox",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-css3",
                "name"  => "css3",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-rss",
                "name"  => "rss",
                "group" => "admin",
            ),
            array(
                "id"    => "ti-rss-alt",
                "name"  => "rss",
                "group" => "admin",
            ),
            array(
                "id"    => "pe-7s-album",
                "name"  => "album",
                "group" => "admin",
            ),

            array(
                "id"    => "pe-7s-arc",
                "name"  => "arc",
                "group" => "admin",
            ),

            array(
                "id"    => "pe-7s-back-2",
                "name"  => "back",
                "group" => "admin",
            ),

            array(
                "id"    => "pe-7s-bandaid",
                "name"  => "bandaid",
                "group" => "admin",
            ),

            array(
                "id"    => "pe-7s-car",
                "name"  => "car",
                "group" => "admin",
            ),

            array(
                "id"    => "pe-7s-diamond",
                "name"  => "diamond",
                "group" => "admin",
            ),

            array(
                "id"    => "pe-7s-door-lock",
                "name"  => "lock",
                "group" => "admin",
            ),

            array(
                "id"    => "pe-7s-eyedropper",
                "name"  => "eyedropper",
                "group" => "admin",
            ),

            array(
                "id"    => "pe-7s-female",
                "name"  => "female",
                "group" => "admin",
            ),

            array(
                "id"    => "pe-7s-gym",
                "name"  => "gym",
                "group" => "admin",
            ),

            array(
                "id"    => "pe-7s-hammer",
                "name"  => "hammer",
                "group" => "admin",
            ),

            array(
                "id"    => "pe-7s-headphones",
                "name"  => "headphones",
                "group" => "admin",
            ),

            array(
                "id"    => "pe-7s-helm",
                "name"  => "helm",
                "group" => "admin",
            ),

            array(
                "id"    => "pe-7s-hourglass",
                "name"  => "hourglass",
                "group" => "admin",
            ),

            array(
                "id"    => "pe-7s-leaf",
                "name"  => "leaf",
                "group" => "admin",
            ),

            array(
                "id"    => "pe-7s-magic-wand",
                "name"  => "wand",
                "group" => "admin",
            ),

            array(
                "id"    => "pe-7s-male",
                "name"  => "male",
                "group" => "admin",
            ),

            array(
                "id"    => "pe-7s-map-2",
                "name"  => "2",
                "group" => "admin",
            ),

            array(
                "id"    => "pe-7s-next-2",
                "name"  => "2",
                "group" => "admin",
            ),

            array(
                "id"    => "pe-7s-paint-bucket",
                "name"  => "bucket",
                "group" => "admin",
            ),

            array(
                "id"    => "pe-7s-pendrive",
                "name"  => "pendrive",
                "group" => "admin",
            ),

            array(
                "id"    => "pe-7s-photo",
                "name"  => "photo",
                "group" => "admin",
            ),

            array(
                "id"    => "pe-7s-piggy",
                "name"  => "piggy",
                "group" => "admin",
            ),

            array(
                "id"    => "pe-7s-plugin",
                "name"  => "plugin",
                "group" => "admin",
            ),

            array(
                "id"    => "pe-7s-refresh-2",
                "name"  => "2",
                "group" => "admin",
            ),

            array(
                "id"    => "pe-7s-rocket",
                "name"  => "rocket",
                "group" => "admin",
            ),

            array(
                "id"    => "pe-7s-settings",
                "name"  => "settings",
                "group" => "admin",
            ),

            array(
                "id"    => "pe-7s-shield",
                "name"  => "shield",
                "group" => "admin",
            ),

            array(
                "id"    => "pe-7s-smile",
                "name"  => "smile",
                "group" => "admin",
            ),

            array(
                "id"    => "pe-7s-usb",
                "name"  => "usb",
                "group" => "admin",
            ),

            array(
                "id"    => "pe-7s-vector",
                "name"  => "vector",
                "group" => "admin",
            ),

            array(
                "id"    => "pe-7s-wine",
                "name"  => "wine",
                "group" => "admin",
            ),

            array(
                "id"    => "pe-7s-cloud-upload",
                "name"  => "upload",
                "group" => "admin",
            ),

            array(
                "id"    => "pe-7s-cash",
                "name"  => "cash",
                "group" => "admin",
            ),

            array(
                "id"    => "pe-7s-close",
                "name"  => "close",
                "group" => "admin",
            ),

            array(
                "id"    => "pe-7s-bluetooth",
                "name"  => "bluetooth",
                "group" => "admin",
            ),

            array(
                "id"    => "pe-7s-cloud-download",
                "name"  => "download",
                "group" => "admin",
            ),

            array(
                "id"    => "pe-7s-way",
                "name"  => "way",
                "group" => "admin",
            ),

            array(
                "id"    => "pe-7s-close-circle",
                "name"  => "circle",
                "group" => "admin",
            ),

            array(
                "id"    => "pe-7s-id",
                "name"  => "id",
                "group" => "admin",
            ),

            array(
                "id"    => "pe-7s-angle-up",
                "name"  => "up",
                "group" => "admin",
            ),

            array(
                "id"    => "pe-7s-wristwatch",
                "name"  => "wristwatch",
                "group" => "admin",
            ),

            array(
                "id"    => "pe-7s-angle-up-circle",
                "name"  => "circle",
                "group" => "admin",
            ),

            array(
                "id"    => "pe-7s-world",
                "name"  => "world",
                "group" => "admin",
            ),

            array(
                "id"    => "pe-7s-angle-right",
                "name"  => "right",
                "group" => "admin",
            ),

            array(
                "id"    => "pe-7s-volume",
                "name"  => "volume",
                "group" => "admin",
            ),

            array(
                "id"    => "pe-7s-angle-right-circle",
                "name"  => "circle",
                "group" => "admin",
            ),

            array(
                "id"    => "pe-7s-users",
                "name"  => "users",
                "group" => "admin",
            ),

            array(
                "id"    => "pe-7s-angle-left",
                "name"  => "left",
                "group" => "admin",
            ),

            array(
                "id"    => "pe-7s-user-female",
                "name"  => "female",
                "group" => "admin",
            ),

            array(
                "id"    => "pe-7s-angle-left-circle",
                "name"  => "circle",
                "group" => "admin",
            ),

            array(
                "id"    => "pe-7s-up-arrow",
                "name"  => "arrow",
                "group" => "admin",
            ),

            array(
                "id"    => "pe-7s-angle-down",
                "name"  => "down",
                "group" => "admin",
            ),

            array(
                "id"    => "pe-7s-switch",
                "name"  => "switch",
                "group" => "admin",
            ),

            array(
                "id"    => "pe-7s-angle-down-circle",
                "name"  => "circle",
                "group" => "admin",
            ),

            array(
                "id"    => "pe-7s-scissors",
                "name"  => "scissors",
                "group" => "admin",
            ),

            array(
                "id"    => "pe-7s-wallet",
                "name"  => "wallet",
                "group" => "admin",
            ),

            array(
                "id"    => "pe-7s-safe",
                "name"  => "safe",
                "group" => "admin",
            ),

            array(
                "id"    => "pe-7s-volume2",
                "name"  => "volume2",
                "group" => "admin",
            ),

            array(
                "id"    => "pe-7s-volume1",
                "name"  => "volume1",
                "group" => "admin",
            ),

            array(
                "id"    => "pe-7s-voicemail",
                "name"  => "voicemail",
                "group" => "admin",
            ),

            array(
                "id"    => "pe-7s-video",
                "name"  => "video",
                "group" => "admin",
            ),

            array(
                "id"    => "pe-7s-user",
                "name"  => "user",
                "group" => "admin",
            ),

            array(
                "id"    => "pe-7s-upload",
                "name"  => "upload",
                "group" => "admin",
            ),

            array(
                "id"    => "pe-7s-unlock",
                "name"  => "unlock",
                "group" => "admin",
            ),

            array(
                "id"    => "pe-7s-umbrella",
                "name"  => "umbrella",
                "group" => "admin",
            ),

            array(
                "id"    => "pe-7s-trash",
                "name"  => "trash",
                "group" => "admin",
            ),

            array(
                "id"    => "pe-7s-tools",
                "name"  => "tools",
                "group" => "admin",
            ),

            array(
                "id"    => "pe-7s-timer",
                "name"  => "timer",
                "group" => "admin",
            ),

            array(
                "id"    => "pe-7s-ticket",
                "name"  => "ticket",
                "group" => "admin",
            ),

            array(
                "id"    => "pe-7s-target",
                "name"  => "target",
                "group" => "admin",
            ),

            array(
                "id"    => "pe-7s-sun",
                "name"  => "sun",
                "group" => "admin",
            ),

            array(
                "id"    => "pe-7s-study",
                "name"  => "study",
                "group" => "admin",
            ),

            array(
                "id"    => "pe-7s-stopwatch",
                "name"  => "stopwatch",
                "group" => "admin",
            ),

            array(
                "id"    => "pe-7s-star",
                "name"  => "star",
                "group" => "admin",
            ),

            array(
                "id"    => "pe-7s-speaker",
                "name"  => "speaker",
                "group" => "admin",
            ),

            array(
                "id"    => "pe-7s-signal",
                "name"  => "signal",
                "group" => "admin",
            ),

            array(
                "id"    => "pe-7s-shuffle",
                "name"  => "shuffle",
                "group" => "admin",
            ),

            array(
                "id"    => "pe-7s-shopbag",
                "name"  => "shopbag",
                "group" => "admin",
            ),

            array(
                "id"    => "pe-7s-share",
                "name"  => "share",
                "group" => "admin",
            ),

            array(
                "id"    => "pe-7s-server",
                "name"  => "server",
                "group" => "admin",
            ),

            array(
                "id"    => "pe-7s-search",
                "name"  => "search",
                "group" => "admin",
            ),

            array(
                "id"    => "pe-7s-film",
                "name"  => "film",
                "group" => "admin",
            ),

            array(
                "id"    => "pe-7s-science",
                "name"  => "science",
                "group" => "admin",
            ),

            array(
                "id"    => "pe-7s-disk",
                "name"  => "disk",
                "group" => "admin",
            ),

            array(
                "id"    => "pe-7s-ribbon",
                "name"  => "ribbon",
                "group" => "admin",
            ),

            array(
                "id"    => "pe-7s-repeat",
                "name"  => "repeat",
                "group" => "admin",
            ),

            array(
                "id"    => "pe-7s-refresh",
                "name"  => "refresh",
                "group" => "admin",
            ),

            array(
                "id"    => "pe-7s-add-user",
                "name"  => "user",
                "group" => "admin",
            ),

            array(
                "id"    => "pe-7s-refresh-cloud",
                "name"  => "cloud",
                "group" => "admin",
            ),

            array(
                "id"    => "pe-7s-paperclip",
                "name"  => "paperclip",
                "group" => "admin",
            ),

            array(
                "id"    => "pe-7s-radio",
                "name"  => "radio",
                "group" => "admin",
            ),

            array(
                "id"    => "pe-7s-note2",
                "name"  => "note2",
                "group" => "admin",
            ),

            array(
                "id"    => "pe-7s-print",
                "name"  => "print",
                "group" => "admin",
            ),

            array(
                "id"    => "pe-7s-network",
                "name"  => "network",
                "group" => "admin",
            ),

            array(
                "id"    => "pe-7s-prev",
                "name"  => "prev",
                "group" => "admin",
            ),

            array(
                "id"    => "pe-7s-mute",
                "name"  => "mute",
                "group" => "admin",
            ),

            array(
                "id"    => "pe-7s-power",
                "name"  => "power",
                "group" => "admin",
            ),

            array(
                "id"    => "pe-7s-medal",
                "name"  => "medal",
                "group" => "admin",
            ),

            array(
                "id"    => "pe-7s-portfolio",
                "name"  => "portfolio",
                "group" => "admin",
            ),

            array(
                "id"    => "pe-7s-like2",
                "name"  => "like2",
                "group" => "admin",
            ),

            array(
                "id"    => "pe-7s-plus",
                "name"  => "plus",
                "group" => "admin",
            ),

            array(
                "id"    => "pe-7s-left-arrow",
                "name"  => "arrow",
                "group" => "admin",
            ),

            array(
                "id"    => "pe-7s-play",
                "name"  => "play",
                "group" => "admin",
            ),

            array(
                "id"    => "pe-7s-key",
                "name"  => "key",
                "group" => "admin",
            ),

            array(
                "id"    => "pe-7s-plane",
                "name"  => "plane",
                "group" => "admin",
            ),

            array(
                "id"    => "pe-7s-joy",
                "name"  => "joy",
                "group" => "admin",
            ),

            array(
                "id"    => "pe-7s-photo-gallery",
                "name"  => "gallery",
                "group" => "admin",
            ),

            array(
                "id"    => "pe-7s-pin",
                "name"  => "pin",
                "group" => "admin",
            ),

            array(
                "id"    => "pe-7s-phone",
                "name"  => "phone",
                "group" => "admin",
            ),

            array(
                "id"    => "pe-7s-plug",
                "name"  => "plug",
                "group" => "admin",
            ),

            array(
                "id"    => "pe-7s-pen",
                "name"  => "pen",
                "group" => "admin",
            ),

            array(
                "id"    => "pe-7s-right-arrow",
                "name"  => "arrow",
                "group" => "admin",
            ),

            array(
                "id"    => "pe-7s-paper-plane",
                "name"  => "plane",
                "group" => "admin",
            ),

            array(
                "id"    => "pe-7s-delete-user",
                "name"  => "user",
                "group" => "admin",
            ),

            array(
                "id"    => "pe-7s-paint",
                "name"  => "paint",
                "group" => "admin",
            ),

            array(
                "id"    => "pe-7s-bottom-arrow",
                "name"  => "arrow",
                "group" => "admin",
            ),

            array(
                "id"    => "pe-7s-notebook",
                "name"  => "notebook",
                "group" => "admin",
            ),

            array(
                "id"    => "pe-7s-note",
                "name"  => "note",
                "group" => "admin",
            ),

            array(
                "id"    => "pe-7s-next",
                "name"  => "next",
                "group" => "admin",
            ),

            array(
                "id"    => "pe-7s-news-paper",
                "name"  => "paper",
                "group" => "admin",
            ),

            array(
                "id"    => "pe-7s-musiclist",
                "name"  => "musiclist",
                "group" => "admin",
            ),

            array(
                "id"    => "pe-7s-music",
                "name"  => "music",
                "group" => "admin",
            ),

            array(
                "id"    => "pe-7s-mouse",
                "name"  => "mouse",
                "group" => "admin",
            ),

            array(
                "id"    => "pe-7s-more",
                "name"  => "more",
                "group" => "admin",
            ),

            array(
                "id"    => "pe-7s-moon",
                "name"  => "moon",
                "group" => "admin",
            ),

            array(
                "id"    => "pe-7s-monitor",
                "name"  => "monitor",
                "group" => "admin",
            ),

            array(
                "id"    => "pe-7s-micro",
                "name"  => "micro",
                "group" => "admin",
            ),

            array(
                "id"    => "pe-7s-menu",
                "name"  => "menu",
                "group" => "admin",
            ),

            array(
                "id"    => "pe-7s-map",
                "name"  => "map",
                "group" => "admin",
            ),

            array(
                "id"    => "pe-7s-map-marker",
                "name"  => "marker",
                "group" => "admin",
            ),

            array(
                "id"    => "pe-7s-mail",
                "name"  => "mail",
                "group" => "admin",
            ),

            array(
                "id"    => "pe-7s-mail-open",
                "name"  => "open",
                "group" => "admin",
            ),

            array(
                "id"    => "pe-7s-mail-open-file",
                "name"  => "file",
                "group" => "admin",
            ),

            array(
                "id"    => "pe-7s-magnet",
                "name"  => "magnet",
                "group" => "admin",
            ),

            array(
                "id"    => "pe-7s-loop",
                "name"  => "loop",
                "group" => "admin",
            ),

            array(
                "id"    => "pe-7s-look",
                "name"  => "look",
                "group" => "admin",
            ),

            array(
                "id"    => "pe-7s-lock",
                "name"  => "lock",
                "group" => "admin",
            ),

            array(
                "id"    => "pe-7s-lintern",
                "name"  => "lintern",
                "group" => "admin",
            ),

            array(
                "id"    => "pe-7s-link",
                "name"  => "link",
                "group" => "admin",
            ),

            array(
                "id"    => "pe-7s-like",
                "name"  => "like",
                "group" => "admin",
            ),

            array(
                "id"    => "pe-7s-light",
                "name"  => "light",
                "group" => "admin",
            ),

            array(
                "id"    => "pe-7s-less",
                "name"  => "less",
                "group" => "admin",
            ),

            array(
                "id"    => "pe-7s-keypad",
                "name"  => "keypad",
                "group" => "admin",
            ),

            array(
                "id"    => "pe-7s-junk",
                "name"  => "junk",
                "group" => "admin",
            ),

            array(
                "id"    => "pe-7s-info",
                "name"  => "info",
                "group" => "admin",
            ),

            array(
                "id"    => "pe-7s-home",
                "name"  => "home",
                "group" => "admin",
            ),

            array(
                "id"    => "pe-7s-help2",
                "name"  => "help2",
                "group" => "admin",
            ),

            array(
                "id"    => "pe-7s-help1",
                "name"  => "help1",
                "group" => "admin",
            ),

            array(
                "id"    => "pe-7s-graph3",
                "name"  => "graph3",
                "group" => "admin",
            ),

            array(
                "id"    => "pe-7s-graph2",
                "name"  => "graph2",
                "group" => "admin",
            ),

            array(
                "id"    => "pe-7s-graph1",
                "name"  => "graph1",
                "group" => "admin",
            ),

            array(
                "id"    => "pe-7s-graph",
                "name"  => "graph",
                "group" => "admin",
            ),

            array(
                "id"    => "pe-7s-global",
                "name"  => "global",
                "group" => "admin",
            ),

            array(
                "id"    => "pe-7s-gleam",
                "name"  => "gleam",
                "group" => "admin",
            ),

            array(
                "id"    => "pe-7s-glasses",
                "name"  => "glasses",
                "group" => "admin",
            ),

            array(
                "id"    => "pe-7s-gift",
                "name"  => "gift",
                "group" => "admin",
            ),

            array(
                "id"    => "pe-7s-folder",
                "name"  => "folder",
                "group" => "admin",
            ),

            array(
                "id"    => "pe-7s-flag",
                "name"  => "flag",
                "group" => "admin",
            ),

            array(
                "id"    => "pe-7s-filter",
                "name"  => "filter",
                "group" => "admin",
            ),

            array(
                "id"    => "pe-7s-file",
                "name"  => "file",
                "group" => "admin",
            ),

            array(
                "id"    => "pe-7s-expand1",
                "name"  => "expand1",
                "group" => "admin",
            ),

            array(
                "id"    => "pe-7s-exapnd2",
                "name"  => "exapnd2",
                "group" => "admin",
            ),

            array(
                "id"    => "pe-7s-edit",
                "name"  => "edit",
                "group" => "admin",
            ),

            array(
                "id"    => "pe-7s-drop",
                "name"  => "drop",
                "group" => "admin",
            ),

            array(
                "id"    => "pe-7s-drawer",
                "name"  => "drawer",
                "group" => "admin",
            ),

            array(
                "id"    => "pe-7s-download",
                "name"  => "download",
                "group" => "admin",
            ),

            array(
                "id"    => "pe-7s-display2",
                "name"  => "display2",
                "group" => "admin",
            ),

            array(
                "id"    => "pe-7s-display1",
                "name"  => "display1",
                "group" => "admin",
            ),

            array(
                "id"    => "pe-7s-diskette",
                "name"  => "diskette",
                "group" => "admin",
            ),

            array(
                "id"    => "pe-7s-date",
                "name"  => "date",
                "group" => "admin",
            ),

            array(
                "id"    => "pe-7s-cup",
                "name"  => "cup",
                "group" => "admin",
            ),

            array(
                "id"    => "pe-7s-culture",
                "name"  => "culture",
                "group" => "admin",
            ),

            array(
                "id"    => "pe-7s-crop",
                "name"  => "crop",
                "group" => "admin",
            ),

            array(
                "id"    => "pe-7s-credit",
                "name"  => "credit",
                "group" => "admin",
            ),

            array(
                "id"    => "pe-7s-copy-file",
                "name"  => "file",
                "group" => "admin",
            ),

            array(
                "id"    => "pe-7s-config",
                "name"  => "config",
                "group" => "admin",
            ),

            array(
                "id"    => "pe-7s-compass",
                "name"  => "compass",
                "group" => "admin",
            ),

            array(
                "id"    => "pe-7s-comment",
                "name"  => "comment",
                "group" => "admin",
            ),

            array(
                "id"    => "pe-7s-coffee",
                "name"  => "coffee",
                "group" => "admin",
            ),

            array(
                "id"    => "pe-7s-cloud",
                "name"  => "cloud",
                "group" => "admin",
            ),

            array(
                "id"    => "pe-7s-clock",
                "name"  => "clock",
                "group" => "admin",
            ),

            array(
                "id"    => "pe-7s-check",
                "name"  => "check",
                "group" => "admin",
            ),

            array(
                "id"    => "pe-7s-chat",
                "name"  => "chat",
                "group" => "admin",
            ),

            array(
                "id"    => "pe-7s-cart",
                "name"  => "cart",
                "group" => "admin",
            ),

            array(
                "id"    => "pe-7s-camera",
                "name"  => "camera",
                "group" => "admin",
            ),

            array(
                "id"    => "pe-7s-call",
                "name"  => "call",
                "group" => "admin",
            ),

            array(
                "id"    => "pe-7s-calculator",
                "name"  => "calculator",
                "group" => "admin",
            ),

            array(
                "id"    => "pe-7s-browser",
                "name"  => "browser",
                "group" => "admin",
            ),

            array(
                "id"    => "pe-7s-box2",
                "name"  => "box2",
                "group" => "admin",
            ),

            array(
                "id"    => "pe-7s-box1",
                "name"  => "box1",
                "group" => "admin",
            ),

            array(
                "id"    => "pe-7s-bookmarks",
                "name"  => "bookmarks",
                "group" => "admin",
            ),

            array(
                "id"    => "pe-7s-bicycle",
                "name"  => "bicycle",
                "group" => "admin",
            ),

            array(
                "id"    => "pe-7s-bell",
                "name"  => "bell",
                "group" => "admin",
            ),

            array(
                "id"    => "pe-7s-battery",
                "name"  => "battery",
                "group" => "admin",
            ),

            array(
                "id"    => "pe-7s-ball",
                "name"  => "ball",
                "group" => "admin",
            ),

            array(
                "id"    => "pe-7s-back",
                "name"  => "back",
                "group" => "admin",
            ),

            array(
                "id"    => "pe-7s-attention",
                "name"  => "attention",
                "group" => "admin",
            ),

            array(
                "id"    => "pe-7s-anchor",
                "name"  => "anchor",
                "group" => "admin",
            ),

            array(
                "id"    => "pe-7s-albums",
                "name"  => "albums",
                "group" => "admin",
            ),

            array(
                "id"    => "pe-7s-alarm",
                "name"  => "alarm",
                "group" => "admin",
            ),

            array(
                "id"    => "pe-7s-airplay",
                "name"  => "airplay",
                "group" => "admin",
            ),
            array(
                "id"    => "fa-glass",
                "name"  => "glass",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-music",
                "name"  => "music",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-search",
                "name"  => "search",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-envelope-o",
                "name"  => "envelope",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-heart",
                "name"  => "heart",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-star",
                "name"  => "star",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-star-o",
                "name"  => "star",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-user",
                "name"  => "user",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-film",
                "name"  => "film",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-th-large",
                "name"  => "th",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-th",
                "name"  => "th",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-th-list",
                "name"  => "th",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-check",
                "name"  => "check",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-close",
                "name"  => "close",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-remove",
                "name"  => "remove",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-times",
                "name"  => "times",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-search-plus",
                "name"  => "search",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-search-minus",
                "name"  => "search",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-power-off",
                "name"  => "power",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-signal",
                "name"  => "signal",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-cog",
                "name"  => "cog",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-gear",
                "name"  => "gear",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-trash-o",
                "name"  => "trash",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-home",
                "name"  => "home",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-file-o",
                "name"  => "file",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-clock-o",
                "name"  => "clock",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-road",
                "name"  => "road",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-download",
                "name"  => "download",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-arrow-circle-o-down",
                "name"  => "arrow",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-arrow-circle-o-up",
                "name"  => "arrow",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-inbox",
                "name"  => "inbox",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-play-circle-o",
                "name"  => "play",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-repeat",
                "name"  => "repeat",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-rotate-right",
                "name"  => "rotate",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-refresh",
                "name"  => "refresh",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-list-alt",
                "name"  => "list",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-lock",
                "name"  => "lock",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-flag",
                "name"  => "flag",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-headphones",
                "name"  => "headphones",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-volume-off",
                "name"  => "volume",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-volume-down",
                "name"  => "volume",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-volume-up",
                "name"  => "volume",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-qrcode",
                "name"  => "qrcode",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-barcode",
                "name"  => "barcode",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-tag",
                "name"  => "tag",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-tags",
                "name"  => "tags",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-book",
                "name"  => "book",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-bookmark",
                "name"  => "bookmark",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-print",
                "name"  => "print",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-camera",
                "name"  => "camera",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-font",
                "name"  => "font",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-bold",
                "name"  => "bold",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-italic",
                "name"  => "italic",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-text-height",
                "name"  => "text",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-text-width",
                "name"  => "text",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-align-left",
                "name"  => "align",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-align-center",
                "name"  => "align",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-align-right",
                "name"  => "align",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-align-justify",
                "name"  => "align",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-list",
                "name"  => "list",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-dedent",
                "name"  => "dedent",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-outdent",
                "name"  => "outdent",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-indent",
                "name"  => "indent",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-video-camera",
                "name"  => "video",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-image",
                "name"  => "image",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-photo",
                "name"  => "photo",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-picture-o",
                "name"  => "picture",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-pencil",
                "name"  => "pencil",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-map-marker",
                "name"  => "map",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-adjust",
                "name"  => "adjust",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-tint",
                "name"  => "tint",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-edit",
                "name"  => "edit",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-pencil-square-o",
                "name"  => "pencil",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-share-square-o",
                "name"  => "share",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-check-square-o",
                "name"  => "check",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-arrows",
                "name"  => "arrows",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-step-backward",
                "name"  => "step",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-fast-backward",
                "name"  => "fast",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-backward",
                "name"  => "backward",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-play",
                "name"  => "play",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-pause",
                "name"  => "pause",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-stop",
                "name"  => "stop",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-forward",
                "name"  => "forward",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-fast-forward",
                "name"  => "fast",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-step-forward",
                "name"  => "step",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-eject",
                "name"  => "eject",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-chevron-left",
                "name"  => "chevron",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-chevron-right",
                "name"  => "chevron",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-plus-circle",
                "name"  => "plus",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-minus-circle",
                "name"  => "minus",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-times-circle",
                "name"  => "times",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-check-circle",
                "name"  => "check",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-question-circle",
                "name"  => "question",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-info-circle",
                "name"  => "info",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-crosshairs",
                "name"  => "crosshairs",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-times-circle-o",
                "name"  => "times",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-check-circle-o",
                "name"  => "check",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-ban",
                "name"  => "ban",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-arrow-left",
                "name"  => "arrow",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-arrow-right",
                "name"  => "arrow",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-arrow-up",
                "name"  => "arrow",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-arrow-down",
                "name"  => "arrow",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-mail-forward",
                "name"  => "mail",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-share",
                "name"  => "share",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-expand",
                "name"  => "expand",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-compress",
                "name"  => "compress",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-plus",
                "name"  => "plus",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-minus",
                "name"  => "minus",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-asterisk",
                "name"  => "asterisk",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-exclamation-circle",
                "name"  => "exclamation",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-gift",
                "name"  => "gift",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-leaf",
                "name"  => "leaf",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-fire",
                "name"  => "fire",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-eye",
                "name"  => "eye",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-eye-slash",
                "name"  => "eye",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-exclamation-triangle",
                "name"  => "exclamation",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-warning",
                "name"  => "warning",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-plane",
                "name"  => "plane",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-calendar",
                "name"  => "calendar",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-random",
                "name"  => "random",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-comment",
                "name"  => "comment",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-magnet",
                "name"  => "magnet",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-chevron-up",
                "name"  => "chevron",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-chevron-down",
                "name"  => "chevron",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-retweet",
                "name"  => "retweet",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-shopping-cart",
                "name"  => "shopping",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-folder",
                "name"  => "folder",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-folder-open",
                "name"  => "folder",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-arrows-v",
                "name"  => "arrows",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-arrows-h",
                "name"  => "arrows",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-bar-chart-o",
                "name"  => "bar",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-bar-chart",
                "name"  => "bar",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-twitter-square",
                "name"  => "twitter",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-facebook-square",
                "name"  => "facebook",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-camera-retro",
                "name"  => "camera",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-key",
                "name"  => "key",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-cogs",
                "name"  => "cogs",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-gears",
                "name"  => "gears",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-comments",
                "name"  => "comments",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-thumbs-o-up",
                "name"  => "thumbs",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-thumbs-o-down",
                "name"  => "thumbs",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-star-half",
                "name"  => "star",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-heart-o",
                "name"  => "heart",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-sign-out",
                "name"  => "sign",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-linkedin-square",
                "name"  => "linkedin",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-thumb-tack",
                "name"  => "thumb",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-external-link",
                "name"  => "external",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-sign-in",
                "name"  => "sign",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-trophy",
                "name"  => "trophy",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-github-square",
                "name"  => "github",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-upload",
                "name"  => "upload",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-lemon-o",
                "name"  => "lemon",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-phone",
                "name"  => "phone",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-square-o",
                "name"  => "square",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-bookmark-o",
                "name"  => "bookmark",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-phone-square",
                "name"  => "phone",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-twitter",
                "name"  => "twitter",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-facebook-f",
                "name"  => "facebook",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-facebook",
                "name"  => "facebook",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-github",
                "name"  => "github",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-unlock",
                "name"  => "unlock",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-credit-card",
                "name"  => "credit",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-feed",
                "name"  => "feed",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-rss",
                "name"  => "rss",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-hdd-o",
                "name"  => "hdd",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-bullhorn",
                "name"  => "bullhorn",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-bell",
                "name"  => "bell",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-certificate",
                "name"  => "certificate",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-hand-o-right",
                "name"  => "hand",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-hand-o-left",
                "name"  => "hand",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-hand-o-up",
                "name"  => "hand",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-hand-o-down",
                "name"  => "hand",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-arrow-circle-left",
                "name"  => "arrow",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-arrow-circle-right",
                "name"  => "arrow",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-arrow-circle-up",
                "name"  => "arrow",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-arrow-circle-down",
                "name"  => "arrow",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-globe",
                "name"  => "globe",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-wrench",
                "name"  => "wrench",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-tasks",
                "name"  => "tasks",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-filter",
                "name"  => "filter",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-briefcase",
                "name"  => "briefcase",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-arrows-alt",
                "name"  => "arrows",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-group",
                "name"  => "group",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-users",
                "name"  => "users",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-chain",
                "name"  => "chain",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-link",
                "name"  => "link",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-cloud",
                "name"  => "cloud",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-flask",
                "name"  => "flask",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-cut",
                "name"  => "cut",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-scissors",
                "name"  => "scissors",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-copy",
                "name"  => "copy",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-files-o",
                "name"  => "files",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-paperclip",
                "name"  => "paperclip",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-floppy-o",
                "name"  => "floppy",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-save",
                "name"  => "save",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-square",
                "name"  => "square",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-bars",
                "name"  => "bars",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-navicon",
                "name"  => "navicon",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-reorder",
                "name"  => "reorder",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-list-ul",
                "name"  => "list",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-list-ol",
                "name"  => "list",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-strikethrough",
                "name"  => "strikethrough",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-underline",
                "name"  => "underline",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-table",
                "name"  => "table",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-magic",
                "name"  => "magic",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-truck",
                "name"  => "truck",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-pinterest",
                "name"  => "pinterest",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-pinterest-square",
                "name"  => "pinterest",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-google-plus-square",
                "name"  => "google",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-google-plus",
                "name"  => "google",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-money",
                "name"  => "money",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-caret-down",
                "name"  => "caret",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-caret-up",
                "name"  => "caret",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-caret-left",
                "name"  => "caret",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-caret-right",
                "name"  => "caret",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-columns",
                "name"  => "columns",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-sort",
                "name"  => "sort",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-unsorted",
                "name"  => "unsorted",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-sort-desc",
                "name"  => "sort",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-sort-down",
                "name"  => "sort",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-sort-asc",
                "name"  => "sort",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-sort-up",
                "name"  => "sort",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-envelope",
                "name"  => "envelope",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-linkedin",
                "name"  => "linkedin",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-rotate-left",
                "name"  => "rotate",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-undo",
                "name"  => "undo",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-gavel",
                "name"  => "gavel",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-legal",
                "name"  => "legal",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-dashboard",
                "name"  => "dashboard",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-tachometer",
                "name"  => "tachometer",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-comment-o",
                "name"  => "comment",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-comments-o",
                "name"  => "comments",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-bolt",
                "name"  => "bolt",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-flash",
                "name"  => "flash",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-sitemap",
                "name"  => "sitemap",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-umbrella",
                "name"  => "umbrella",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-clipboard",
                "name"  => "clipboard",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-paste",
                "name"  => "paste",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-lightbulb-o",
                "name"  => "lightbulb",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-exchange",
                "name"  => "exchange",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-cloud-download",
                "name"  => "cloud",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-cloud-upload",
                "name"  => "cloud",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-user-md",
                "name"  => "user",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-stethoscope",
                "name"  => "stethoscope",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-suitcase",
                "name"  => "suitcase",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-bell-o",
                "name"  => "bell",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-coffee",
                "name"  => "coffee",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-cutlery",
                "name"  => "cutlery",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-file-text-o",
                "name"  => "file",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-building-o",
                "name"  => "building",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-hospital-o",
                "name"  => "hospital",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-ambulance",
                "name"  => "ambulance",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-medkit",
                "name"  => "medkit",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-fighter-jet",
                "name"  => "fighter",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-beer",
                "name"  => "beer",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-h-square",
                "name"  => "h",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-plus-square",
                "name"  => "plus",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-angle-double-left",
                "name"  => "angle",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-angle-double-right",
                "name"  => "angle",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-angle-double-up",
                "name"  => "angle",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-angle-double-down",
                "name"  => "angle",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-angle-left",
                "name"  => "angle",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-angle-right",
                "name"  => "angle",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-angle-up",
                "name"  => "angle",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-angle-down",
                "name"  => "angle",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-desktop",
                "name"  => "desktop",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-laptop",
                "name"  => "laptop",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-tablet",
                "name"  => "tablet",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-mobile-phone",
                "name"  => "mobile",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-mobile",
                "name"  => "mobile",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-circle-o",
                "name"  => "circle",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-quote-left",
                "name"  => "quote",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-quote-right",
                "name"  => "quote",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-spinner",
                "name"  => "spinner",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-circle",
                "name"  => "circle",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-mail-reply",
                "name"  => "mail",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-reply",
                "name"  => "reply",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-github-alt",
                "name"  => "github",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-folder-o",
                "name"  => "folder",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-folder-open-o",
                "name"  => "folder",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-smile-o",
                "name"  => "smile",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-frown-o",
                "name"  => "frown",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-meh-o",
                "name"  => "meh",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-gamepad",
                "name"  => "gamepad",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-keyboard-o",
                "name"  => "keyboard",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-flag-o",
                "name"  => "flag",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-flag-checkered",
                "name"  => "flag",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-terminal",
                "name"  => "terminal",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-code",
                "name"  => "code",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-mail-reply-all",
                "name"  => "mail",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-reply-all",
                "name"  => "reply",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-star-half-empty",
                "name"  => "star",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-star-half-full",
                "name"  => "star",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-star-half-o",
                "name"  => "star",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-location-arrow",
                "name"  => "location",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-crop",
                "name"  => "crop",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-code-fork",
                "name"  => "code",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-chain-broken",
                "name"  => "chain",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-unlink",
                "name"  => "unlink",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-question",
                "name"  => "question",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-info",
                "name"  => "info",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-exclamation",
                "name"  => "exclamation",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-superscript",
                "name"  => "superscript",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-subscript",
                "name"  => "subscript",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-eraser",
                "name"  => "eraser",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-puzzle-piece",
                "name"  => "puzzle",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-microphone",
                "name"  => "microphone",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-microphone-slash",
                "name"  => "microphone",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-shield",
                "name"  => "shield",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-calendar-o",
                "name"  => "calendar",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-fire-extinguisher",
                "name"  => "fire",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-rocket",
                "name"  => "rocket",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-maxcdn",
                "name"  => "maxcdn",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-chevron-circle-left",
                "name"  => "chevron",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-chevron-circle-right",
                "name"  => "chevron",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-chevron-circle-up",
                "name"  => "chevron",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-chevron-circle-down",
                "name"  => "chevron",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-html5",
                "name"  => "html5",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-css3",
                "name"  => "css3",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-anchor",
                "name"  => "anchor",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-unlock-alt",
                "name"  => "unlock",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-bullseye",
                "name"  => "bullseye",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-ellipsis-h",
                "name"  => "ellipsis",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-ellipsis-v",
                "name"  => "ellipsis",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-rss-square",
                "name"  => "rss",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-play-circle",
                "name"  => "play",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-ticket",
                "name"  => "ticket",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-minus-square",
                "name"  => "minus",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-minus-square-o",
                "name"  => "minus",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-level-up",
                "name"  => "level",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-level-down",
                "name"  => "level",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-check-square",
                "name"  => "check",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-pencil-square",
                "name"  => "pencil",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-external-link-square",
                "name"  => "external",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-share-square",
                "name"  => "share",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-compass",
                "name"  => "compass",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-caret-square-o-down",
                "name"  => "caret",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-toggle-down",
                "name"  => "toggle",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-caret-square-o-up",
                "name"  => "caret",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-toggle-up",
                "name"  => "toggle",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-caret-square-o-right",
                "name"  => "caret",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-toggle-right",
                "name"  => "toggle",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-eur",
                "name"  => "eur",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-euro",
                "name"  => "euro",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-gbp",
                "name"  => "gbp",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-dollar",
                "name"  => "dollar",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-usd",
                "name"  => "usd",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-inr",
                "name"  => "inr",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-rupee",
                "name"  => "rupee",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-cny",
                "name"  => "cny",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-jpy",
                "name"  => "jpy",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-rmb",
                "name"  => "rmb",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-yen",
                "name"  => "yen",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-rouble",
                "name"  => "rouble",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-rub",
                "name"  => "rub",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-ruble",
                "name"  => "ruble",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-krw",
                "name"  => "krw",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-won",
                "name"  => "won",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-bitcoin",
                "name"  => "bitcoin",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-btc",
                "name"  => "btc",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-file",
                "name"  => "file",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-file-text",
                "name"  => "file",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-sort-alpha-asc",
                "name"  => "sort",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-sort-alpha-desc",
                "name"  => "sort",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-sort-amount-asc",
                "name"  => "sort",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-sort-amount-desc",
                "name"  => "sort",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-sort-numeric-asc",
                "name"  => "sort",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-sort-numeric-desc",
                "name"  => "sort",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-thumbs-up",
                "name"  => "thumbs",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-thumbs-down",
                "name"  => "thumbs",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-youtube-square",
                "name"  => "youtube",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-youtube",
                "name"  => "youtube",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-xing",
                "name"  => "xing",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-xing-square",
                "name"  => "xing",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-youtube-play",
                "name"  => "youtube",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-dropbox",
                "name"  => "dropbox",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-stack-overflow",
                "name"  => "stack",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-instagram",
                "name"  => "instagram",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-flickr",
                "name"  => "flickr",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-adn",
                "name"  => "adn",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-bitbucket",
                "name"  => "bitbucket",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-bitbucket-square",
                "name"  => "bitbucket",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-tumblr",
                "name"  => "tumblr",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-tumblr-square",
                "name"  => "tumblr",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-long-arrow-down",
                "name"  => "long",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-long-arrow-up",
                "name"  => "long",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-long-arrow-left",
                "name"  => "long",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-long-arrow-right",
                "name"  => "long",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-apple",
                "name"  => "apple",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-windows",
                "name"  => "windows",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-android",
                "name"  => "android",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-linux",
                "name"  => "linux",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-dribbble",
                "name"  => "dribbble",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-skype",
                "name"  => "skype",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-foursquare",
                "name"  => "foursquare",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-trello",
                "name"  => "trello",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-female",
                "name"  => "female",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-male",
                "name"  => "male",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-gittip",
                "name"  => "gittip",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-gratipay",
                "name"  => "gratipay",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-sun-o",
                "name"  => "sun",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-moon-o",
                "name"  => "moon",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-archive",
                "name"  => "archive",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-bug",
                "name"  => "bug",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-vk",
                "name"  => "vk",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-weibo",
                "name"  => "weibo",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-renren",
                "name"  => "renren",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-pagelines",
                "name"  => "pagelines",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-stack-exchange",
                "name"  => "stack",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-arrow-circle-o-right",
                "name"  => "arrow",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-arrow-circle-o-left",
                "name"  => "arrow",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-caret-square-o-left",
                "name"  => "caret",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-toggle-left",
                "name"  => "toggle",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-dot-circle-o",
                "name"  => "dot",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-wheelchair",
                "name"  => "wheelchair",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-vimeo-square",
                "name"  => "vimeo",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-try",
                "name"  => "try",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-turkish-lira",
                "name"  => "turkish",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-plus-square-o",
                "name"  => "plus",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-space-shuttle",
                "name"  => "space",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-slack",
                "name"  => "slack",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-envelope-square",
                "name"  => "envelope",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-wordpress",
                "name"  => "wordpress",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-openid",
                "name"  => "openid",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-bank",
                "name"  => "bank",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-institution",
                "name"  => "institution",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-university",
                "name"  => "university",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-graduation-cap",
                "name"  => "graduation",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-mortar-board",
                "name"  => "mortar",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-yahoo",
                "name"  => "yahoo",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-google",
                "name"  => "google",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-reddit",
                "name"  => "reddit",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-reddit-square",
                "name"  => "reddit",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-stumbleupon-circle",
                "name"  => "stumbleupon",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-stumbleupon",
                "name"  => "stumbleupon",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-delicious",
                "name"  => "delicious",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-digg",
                "name"  => "digg",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-pied-piper",
                "name"  => "pied",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-pied-piper-alt",
                "name"  => "pied",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-drupal",
                "name"  => "drupal",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-joomla",
                "name"  => "joomla",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-language",
                "name"  => "language",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-fax",
                "name"  => "fax",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-building",
                "name"  => "building",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-child",
                "name"  => "child",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-paw",
                "name"  => "paw",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-spoon",
                "name"  => "spoon",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-cube",
                "name"  => "cube",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-cubes",
                "name"  => "cubes",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-behance",
                "name"  => "behance",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-behance-square",
                "name"  => "behance",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-steam",
                "name"  => "steam",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-steam-square",
                "name"  => "steam",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-recycle",
                "name"  => "recycle",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-automobile",
                "name"  => "automobile",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-car",
                "name"  => "car",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-cab",
                "name"  => "cab",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-taxi",
                "name"  => "taxi",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-tree",
                "name"  => "tree",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-spotify",
                "name"  => "spotify",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-deviantart",
                "name"  => "deviantart",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-soundcloud",
                "name"  => "soundcloud",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-database",
                "name"  => "database",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-file-pdf-o",
                "name"  => "file",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-file-word-o",
                "name"  => "file",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-file-excel-o",
                "name"  => "file",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-file-powerpoint-o",
                "name"  => "file",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-file-image-o",
                "name"  => "file",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-file-photo-o",
                "name"  => "file",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-file-picture-o",
                "name"  => "file",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-file-archive-o",
                "name"  => "file",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-file-zip-o",
                "name"  => "file",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-file-audio-o",
                "name"  => "file",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-file-sound-o",
                "name"  => "file",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-file-movie-o",
                "name"  => "file",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-file-video-o",
                "name"  => "file",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-file-code-o",
                "name"  => "file",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-vine",
                "name"  => "vine",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-codepen",
                "name"  => "codepen",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-jsfiddle",
                "name"  => "jsfiddle",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-life-bouy",
                "name"  => "life",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-life-buoy",
                "name"  => "life",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-life-ring",
                "name"  => "life",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-life-saver",
                "name"  => "life",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-support",
                "name"  => "support",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-circle-o-notch",
                "name"  => "circle",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-ra",
                "name"  => "ra",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-rebel",
                "name"  => "rebel",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-empire",
                "name"  => "empire",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-ge",
                "name"  => "ge",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-git-square",
                "name"  => "git",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-git",
                "name"  => "git",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-hacker-news",
                "name"  => "hacker",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-y-combinator-square",
                "name"  => "y",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-yc-square",
                "name"  => "yc",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-tencent-weibo",
                "name"  => "tencent",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-qq",
                "name"  => "qq",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-wechat",
                "name"  => "wechat",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-weixin",
                "name"  => "weixin",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-paper-plane",
                "name"  => "paper",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-send",
                "name"  => "send",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-paper-plane-o",
                "name"  => "paper",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-send-o",
                "name"  => "send",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-history",
                "name"  => "history",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-circle-thin",
                "name"  => "circle",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-header",
                "name"  => "header",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-paragraph",
                "name"  => "paragraph",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-sliders",
                "name"  => "sliders",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-share-alt",
                "name"  => "share",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-share-alt-square",
                "name"  => "share",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-bomb",
                "name"  => "bomb",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-futbol-o",
                "name"  => "futbol",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-soccer-ball-o",
                "name"  => "soccer",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-tty",
                "name"  => "tty",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-binoculars",
                "name"  => "binoculars",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-plug",
                "name"  => "plug",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-slideshare",
                "name"  => "slideshare",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-twitch",
                "name"  => "twitch",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-yelp",
                "name"  => "yelp",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-newspaper-o",
                "name"  => "newspaper",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-wifi",
                "name"  => "wifi",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-calculator",
                "name"  => "calculator",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-paypal",
                "name"  => "paypal",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-google-wallet",
                "name"  => "google",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-cc-visa",
                "name"  => "cc",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-cc-mastercard",
                "name"  => "cc",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-cc-discover",
                "name"  => "cc",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-cc-amex",
                "name"  => "cc",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-cc-paypal",
                "name"  => "cc",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-cc-stripe",
                "name"  => "cc",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-bell-slash",
                "name"  => "bell",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-bell-slash-o",
                "name"  => "bell",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-trash",
                "name"  => "trash",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-copyright",
                "name"  => "copyright",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-at",
                "name"  => "at",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-eyedropper",
                "name"  => "eyedropper",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-paint-brush",
                "name"  => "paint",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-birthday-cake",
                "name"  => "birthday",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-area-chart",
                "name"  => "area",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-pie-chart",
                "name"  => "pie",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-line-chart",
                "name"  => "line",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-lastfm",
                "name"  => "lastfm",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-lastfm-square",
                "name"  => "lastfm",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-toggle-off",
                "name"  => "toggle",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-toggle-on",
                "name"  => "toggle",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-bicycle",
                "name"  => "bicycle",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-bus",
                "name"  => "bus",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-ioxhost",
                "name"  => "ioxhost",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-angellist",
                "name"  => "angellist",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-cc",
                "name"  => "cc",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-ils",
                "name"  => "ils",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-shekel",
                "name"  => "shekel",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-sheqel",
                "name"  => "sheqel",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-meanpath",
                "name"  => "meanpath",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-buysellads",
                "name"  => "buysellads",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-connectdevelop",
                "name"  => "connectdevelop",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-dashcube",
                "name"  => "dashcube",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-forumbee",
                "name"  => "forumbee",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-leanpub",
                "name"  => "leanpub",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-sellsy",
                "name"  => "sellsy",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-shirtsinbulk",
                "name"  => "shirtsinbulk",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-simplybuilt",
                "name"  => "simplybuilt",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-skyatlas",
                "name"  => "skyatlas",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-cart-plus",
                "name"  => "cart",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-cart-arrow-down",
                "name"  => "cart",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-diamond",
                "name"  => "diamond",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-ship",
                "name"  => "ship",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-user-secret",
                "name"  => "user",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-motorcycle",
                "name"  => "motorcycle",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-street-view",
                "name"  => "street",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-heartbeat",
                "name"  => "heartbeat",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-venus",
                "name"  => "venus",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-mars",
                "name"  => "mars",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-mercury",
                "name"  => "mercury",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-intersex",
                "name"  => "intersex",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-transgender",
                "name"  => "transgender",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-transgender-alt",
                "name"  => "transgender",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-venus-double",
                "name"  => "venus",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-mars-double",
                "name"  => "mars",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-venus-mars",
                "name"  => "venus",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-mars-stroke",
                "name"  => "mars",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-mars-stroke-v",
                "name"  => "mars",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-mars-stroke-h",
                "name"  => "mars",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-neuter",
                "name"  => "neuter",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-genderless",
                "name"  => "genderless",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-facebook-official",
                "name"  => "facebook",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-pinterest-p",
                "name"  => "pinterest",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-whatsapp",
                "name"  => "whatsapp",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-server",
                "name"  => "server",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-user-plus",
                "name"  => "user",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-user-times",
                "name"  => "user",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-bed",
                "name"  => "bed",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-hotel",
                "name"  => "hotel",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-viacoin",
                "name"  => "viacoin",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-train",
                "name"  => "train",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-subway",
                "name"  => "subway",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-medium",
                "name"  => "medium",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-y-combinator",
                "name"  => "y",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-yc",
                "name"  => "yc",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-optin-monster",
                "name"  => "optin",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-opencart",
                "name"  => "opencart",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-expeditedssl",
                "name"  => "expeditedssl",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-battery-4",
                "name"  => "battery",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-battery-full",
                "name"  => "battery",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-battery-3",
                "name"  => "battery",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-battery-three-quarters",
                "name"  => "battery",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-battery-2",
                "name"  => "battery",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-battery-half",
                "name"  => "battery",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-battery-1",
                "name"  => "battery",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-battery-quarter",
                "name"  => "battery",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-battery-0",
                "name"  => "battery",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-battery-empty",
                "name"  => "battery",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-mouse-pointer",
                "name"  => "mouse",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-i-cursor",
                "name"  => "i",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-object-group",
                "name"  => "object",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-object-ungroup",
                "name"  => "object",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-sticky-note",
                "name"  => "sticky",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-sticky-note-o",
                "name"  => "sticky",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-cc-jcb",
                "name"  => "cc",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-cc-diners-club",
                "name"  => "cc",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-clone",
                "name"  => "clone",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-balance-scale",
                "name"  => "balance",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-hourglass-o",
                "name"  => "hourglass",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-hourglass-1",
                "name"  => "hourglass",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-hourglass-start",
                "name"  => "hourglass",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-hourglass-2",
                "name"  => "hourglass",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-hourglass-half",
                "name"  => "hourglass",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-hourglass-3",
                "name"  => "hourglass",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-hourglass-end",
                "name"  => "hourglass",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-hourglass",
                "name"  => "hourglass",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-hand-grab-o",
                "name"  => "hand",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-hand-rock-o",
                "name"  => "hand",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-hand-paper-o",
                "name"  => "hand",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-hand-stop-o",
                "name"  => "hand",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-hand-scissors-o",
                "name"  => "hand",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-hand-lizard-o",
                "name"  => "hand",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-hand-spock-o",
                "name"  => "hand",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-hand-pointer-o",
                "name"  => "hand",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-hand-peace-o",
                "name"  => "hand",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-trademark",
                "name"  => "trademark",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-registered",
                "name"  => "registered",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-creative-commons",
                "name"  => "creative",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-gg",
                "name"  => "gg",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-gg-circle",
                "name"  => "gg",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-tripadvisor",
                "name"  => "tripadvisor",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-odnoklassniki",
                "name"  => "odnoklassniki",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-odnoklassniki-square",
                "name"  => "odnoklassniki",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-get-pocket",
                "name"  => "get",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-wikipedia-w",
                "name"  => "wikipedia",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-safari",
                "name"  => "safari",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-chrome",
                "name"  => "chrome",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-firefox",
                "name"  => "firefox",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-opera",
                "name"  => "opera",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-internet-explorer",
                "name"  => "internet",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-television",
                "name"  => "television",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-tv",
                "name"  => "tv",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-contao",
                "name"  => "contao",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-500px",
                "name"  => "500px",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-amazon",
                "name"  => "amazon",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-calendar-plus-o",
                "name"  => "calendar",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-calendar-minus-o",
                "name"  => "calendar",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-calendar-times-o",
                "name"  => "calendar",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-calendar-check-o",
                "name"  => "calendar",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-industry",
                "name"  => "industry",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-map-pin",
                "name"  => "map",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-map-signs",
                "name"  => "map",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-map-o",
                "name"  => "map",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-map",
                "name"  => "map",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-commenting",
                "name"  => "commenting",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-commenting-o",
                "name"  => "commenting",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-houzz",
                "name"  => "houzz",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-vimeo",
                "name"  => "vimeo",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-black-tie",
                "name"  => "black",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-fonticons",
                "name"  => "fonticons",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-reddit-alien",
                "name"  => "reddit",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-edge",
                "name"  => "edge",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-credit-card-alt",
                "name"  => "credit",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-codiepie",
                "name"  => "codiepie",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-modx",
                "name"  => "modx",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-fort-awesome",
                "name"  => "fort",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-usb",
                "name"  => "usb",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-product-hunt",
                "name"  => "product",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-mixcloud",
                "name"  => "mixcloud",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-scribd",
                "name"  => "scribd",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-pause-circle",
                "name"  => "pause",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-pause-circle-o",
                "name"  => "pause",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-stop-circle",
                "name"  => "stop",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-stop-circle-o",
                "name"  => "stop",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-shopping-bag",
                "name"  => "shopping",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-shopping-basket",
                "name"  => "shopping",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-hashtag",
                "name"  => "hashtag",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-bluetooth",
                "name"  => "bluetooth",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-bluetooth-b",
                "name"  => "bluetooth",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-percent",
                "name"  => "percent",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-gitlab",
                "name"  => "gitlab",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-wpbeginner",
                "name"  => "wpbeginner",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-wpforms",
                "name"  => "wpforms",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-envira",
                "name"  => "envira",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-universal-access",
                "name"  => "universal",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-wheelchair-alt",
                "name"  => "wheelchair",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-question-circle-o",
                "name"  => "question",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-blind",
                "name"  => "blind",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-audio-description",
                "name"  => "audio",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-volume-control-phone",
                "name"  => "volume",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-braille",
                "name"  => "braille",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-assistive-listening-systems",
                "name"  => "assistive",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-american-sign-language-interpreting",
                "name"  => "american",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-asl-interpreting",
                "name"  => "asl",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-deaf",
                "name"  => "deaf",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-deafness",
                "name"  => "deafness",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-hard-of-hearing",
                "name"  => "hard",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-glide",
                "name"  => "glide",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-glide-g",
                "name"  => "glide",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-sign-language",
                "name"  => "sign",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-signing",
                "name"  => "signing",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-low-vision",
                "name"  => "low",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-viadeo",
                "name"  => "viadeo",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-viadeo-square",
                "name"  => "viadeo",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-snapchat",
                "name"  => "snapchat",
                "group" => "admin",
            ),
            
            array(
                "id"    => "fa-snapchat-ghost",
                "name"  => "snapchat",
                "group" => "admin",
            ),
            array(
                "id"    => "fa-snapchat-square",
                "name"  => "snapchat",
                "group" => "admin",
            ),
        ),

    ));

    $iconfonts->register( $iconpack );
}
add_action( 'wp_simple_iconfonts', 'hotella_register_new_icons' );