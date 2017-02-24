<?php
/* Loads Stroke 7 Icon Font. */

// Enqueue CSS
wp_enqueue_style('thememove-font-pe-icon-7-stroke', THEME_ROOT . '/css/pe-icon-7-stroke.css');

add_filter( 'vc_iconpicker-type-pe7stroke', 'vc_iconpicker_type_pe7stroke' );

/**
 * Pe7 Stroke icons from themes-pixeden.com/
 *
 * @param $icons - taken from filter - vc_map param field settings['source'] provided icons (default empty array).
 * If array categorized it will auto-enable category dropdown
 *
 * @since 4.4
 * @return array - of icons for iconpicker, can be categorized, or not.
 */
function vc_iconpicker_type_pe7stroke( $icons ) {
	$pe7stroke_icons = array(
		array( "pe-7s-album" => esc_html__( "album", "infinity" ) ),
		array( "pe-7s-arc" => esc_html__( "arc", "infinity" ) ),
		array( "pe-7s-back-2" => esc_html__( "back-2", "infinity" ) ),
		array( "pe-7s-bandaid" => esc_html__( "bandaid", "infinity" ) ),
		array( "pe-7s-car" => esc_html__( "car", "infinity" ) ),
		array( "pe-7s-diamond" => esc_html__( "diamond", "infinity" ) ),
		array( "pe-7s-door-lock" => esc_html__( "door-lock", "infinity" ) ),
		array( "pe-7s-eyedropper" => esc_html__( "eyedropper", "infinity" ) ),
		array( "pe-7s-female" => esc_html__( "female", "infinity" ) ),
		array( "pe-7s-gym" => esc_html__( "gym", "infinity" ) ),
		array( "pe-7s-hammer" => esc_html__( "hammer", "infinity" ) ),
		array( "pe-7s-headphones" => esc_html__( "headphones", "infinity" ) ),
		array( "pe-7s-helm" => esc_html__( "helm", "infinity" ) ),
		array( "pe-7s-hourglass" => esc_html__( "hourglass", "infinity" ) ),
		array( "pe-7s-leaf" => esc_html__( "leaf", "infinity" ) ),
		array( "pe-7s-magic-wand" => esc_html__( "magic wand", "infinity" ) ),
		array( "pe-7s-male" => esc_html__( "male", "infinity" ) ),
		array( "pe-7s-map-2" => esc_html__( "map 2", "infinity" ) ),
		array( "pe-7s-next-2" => esc_html__( "next 2", "infinity" ) ),
		array( "pe-7s-paint-bucket" => esc_html__( "paint bucket", "infinity" ) ),
		array( "pe-7s-pendrive" => esc_html__( "pendrive", "infinity" ) ),
		array( "pe-7s-photo" => esc_html__( "photo", "infinity" ) ),
		array( "pe-7s-piggy" => esc_html__( "piggy", "infinity" ) ),
		array( "pe-7s-plugin" => esc_html__( "plugin", "infinity" ) ),
		array( "pe-7s-refresh-2" => esc_html__( "refresh 2", "infinity" ) ),
		array( "pe-7s-rocket" => esc_html__( "rocket", "infinity" ) ),
		array( "pe-7s-settings" => esc_html__( "settings", "infinity" ) ),
		array( "pe-7s-shield" => esc_html__( "shield", "infinity" ) ),
		array( "pe-7s-smile" => esc_html__( "smile", "infinity" ) ),
		array( "pe-7s-usb" => esc_html__( "usb", "infinity" ) ),
		array( "pe-7s-vector" => esc_html__( "vector", "infinity" ) ),
		array( "pe-7s-wine" => esc_html__( "wine", "infinity" ) ),
		array( "pe-7s-cloud-upload" => esc_html__( "cloud upload", "infinity" ) ),
		array( "pe-7s-cash" => esc_html__( "cash", "infinity" ) ),
		array( "pe-7s-close" => esc_html__( "close", "infinity" ) ),
		array( "pe-7s-bluetooth" => esc_html__( "bluetooth", "infinity" ) ),
		array( "pe-7s-cloud-download" => esc_html__( "cloud download", "infinity" ) ),
		array( "pe-7s-way" => esc_html__( "way", "infinity" ) ),
		array( "pe-7s-close-circle" => esc_html__( "close circle", "infinity" ) ),
		array( "pe-7s-id" => esc_html__( "id", "infinity" ) ),
		array( "pe-7s-angle-up" => esc_html__( "angle up", "infinity" ) ),
		array( "pe-7s-wristwatch" => esc_html__( "wristwatch", "infinity" ) ),
		array( "pe-7s-angle-up-circle" => esc_html__( "angle-up-circle", "infinity" ) ),
		array( "pe-7s-world" => esc_html__( "world", "infinity" ) ),
		array( "pe-7s-angle-right" => esc_html__( "Angle Right", "infinity" ) ),
		array( "pe-7s-volume" => esc_html__( "volume", "infinity" ) ),
		array( "pe-7s-angle-right-circle" => esc_html__( "angle right circle right", "infinity" ) ),
		array( "pe-7s-users" => esc_html__( "Users", "infinity" ) ),
		array( "pe-7s-angle-left" => esc_html__( "angle left", "infinity" ) ),
		array( "pe-7s-user-female" => esc_html__( "user female", "infinity" ) ),
		array( "pe-7s-angle-left-circle" => esc_html__( "angle left circle", "infinity" ) ),
		array( "pe-7s-up-arrow" => esc_html__( "Sound", "infinity" ) ),
		array( "pe-7s-angle-down" => esc_html__( "up arrow", "infinity" ) ),
		array( "pe-7s-switch" => esc_html__( "switch", "infinity" ) ),
		array( "pe-7s-angle-down-circle" => esc_html__( "down circle", "infinity" ) ),
		array( "pe-7s-scissors" => esc_html__( "scissors", "infinity" ) ),
		array( "pe-7s-wallet" => esc_html__( "wallet", "infinity" ) ),
		array( "pe-7s-safe" => esc_html__( "safe", "infinity" ) ),
		array( "pe-7s-volume2" => esc_html__( "volume2", "infinity" ) ),
		array( "pe-7s-volume1" => esc_html__( "volume1", "infinity" ) ),
		array( "pe-7s-voicemail" => esc_html__( "voice mail", "infinity" ) ),
		array( "pe-7s-video" => esc_html__( "video", "infinity" ) ),
		array( "pe-7s-user" => esc_html__( "user", "infinity" ) ),
		array( "pe-7s-upload" => esc_html__( "upload", "infinity" ) ),
		array( "pe-7s-unlock" => esc_html__( "unlock", "infinity" ) ),
		array( "pe-7s-umbrella" => esc_html__( "umbrella", "infinity" ) ),
		array( "pe-7s-trash" => esc_html__( "trash", "infinity" ) ),
		array( "pe-7s-tools" => esc_html__( "tools", "infinity" ) ),
		array( "pe-7s-timer" => esc_html__( "timer", "infinity" ) ),
		array( "pe-7s-ticket" => esc_html__( "ticket", "infinity" ) ),
		array( "pe-7s-target" => esc_html__( "target", "infinity" ) ),
		array( "pe-7s-sun" => esc_html__( "sun", "infinity" ) ),
		array( "pe-7s-study" => esc_html__( "study", "infinity" ) ),
		array( "pe-7s-stopwatch" => esc_html__( "stopwatch", "infinity" ) ),
		array( "pe-7s-star" => esc_html__( "star", "infinity" ) ),
		array( "pe-7s-speaker" => esc_html__( "speaker", "infinity" ) ),
		array( "pe-7s-signal" => esc_html__( "signal", "infinity" ) ),
		array( "pe-7s-shuffle" => esc_html__( "shuffle", "infinity" ) ),
		array( "pe-7s-shopbag" => esc_html__( "shopbag", "infinity" ) ),
		array( "pe-7s-share" => esc_html__( "share", "infinity" ) ),
		array( "pe-7s-server" => esc_html__( "server", "infinity" ) ),
		array( "pe-7s-search" => esc_html__( "search", "infinity" ) ),
		array( "pe-7s-film" => esc_html__( "film", "infinity" ) ),
		array( "pe-7s-science" => esc_html__( "science", "infinity" ) ),
		array( "pe-7s-disk" => esc_html__( "disk", "infinity" ) ),
		array( "pe-7s-ribbon" => esc_html__( "ribbon", "infinity" ) ),
		array( "pe-7s-repeat" => esc_html__( "repeat", "infinity" ) ),
		array( "pe-7s-refresh" => esc_html__( "refresh", "infinity" ) ),
		array( "pe-7s-add-user" => esc_html__( "add user", "infinity" ) ),
		array( "pe-7s-refresh-cloud" => esc_html__( "refresh cloud", "infinity" ) ),
		array( "pe-7s-paperclip" => esc_html__( "paperclip", "infinity" ) ),
		array( "pe-7s-radio" => esc_html__( "radio", "infinity" ) ),
		array( "pe-7s-note2" => esc_html__( "note2", "infinity" ) ),
		array( "pe-7s-print" => esc_html__( "print", "infinity" ) ),
		array( "pe-7s-network" => esc_html__( "network", "infinity" ) ),
		array( "pe-7s-prev" => esc_html__( "prev", "infinity" ) ),
		array( "pe-7s-mute" => esc_html__( "mute", "infinity" ) ),
		array( "pe-7s-power" => esc_html__( "power", "infinity" ) ),
		array( "pe-7s-medal" => esc_html__( "medal", "infinity" ) ),
		array( "pe-7s-portfolio" => esc_html__( "portfolio", "infinity" ) ),
		array( "pe-7s-like2" => esc_html__( "like2", "infinity" ) ),
		array( "pe-7s-plus" => esc_html__( "plus", "infinity" ) ),
		array( "pe-7s-left-arrow" => esc_html__( "left arrow", "infinity" ) ),
		array( "pe-7s-play" => esc_html__( "play", "infinity" ) ),
		array( "pe-7s-key" => esc_html__( "key", "infinity" ) ),
		array( "pe-7s-plane" => esc_html__( "plane", "infinity" ) ),
		array( "pe-7s-joy" => esc_html__( "joy", "infinity" ) ),
		array( "pe-7s-photo-gallery" => esc_html__( "photo gallery", "infinity" ) ),
		array( "pe-7s-pin" => esc_html__( "pin", "infinity" ) ),
		array( "pe-7s-phone" => esc_html__( "phone", "infinity" ) ),
		array( "pe-7s-plug" => esc_html__( "plug", "infinity" ) ),
		array( "pe-7s-pen" => esc_html__( "pen", "infinity" ) ),
		array( "pe-7s-right-arrow" => esc_html__( "right arrow", "infinity" ) ),
		array( "pe-7s-paper-plane" => esc_html__( "paper plane", "infinity" ) ),
		array( "pe-7s-delete-user" => esc_html__( "delete user", "infinity" ) ),
		array( "pe-7s-paint" => esc_html__( "paint", "infinity" ) ),
		array( "pe-7s-bottom-arrow" => esc_html__( "bottom arrow", "infinity" ) ),
		array( "pe-7s-notebook" => esc_html__( "notebook", "infinity" ) ),
		array( "pe-7s-note" => esc_html__( "note", "infinity" ) ),
		array( "pe-7s-next" => esc_html__( "next", "infinity" ) ),
		array( "pe-7s-news-paper" => esc_html__( "news paper", "infinity" ) ),
		array( "pe-7s-musiclist" => esc_html__( "musiclist", "infinity" ) ),
		array( "pe-7s-music" => esc_html__( "music", "infinity" ) ),
		array( "pe-7s-mouse" => esc_html__( "mouse", "infinity" ) ),
		array( "pe-7s-more" => esc_html__( "more", "infinity" ) ),
		array( "pe-7s-moon" => esc_html__( "moon", "infinity" ) ),
		array( "pe-7s-monitor" => esc_html__( "monitor", "infinity" ) ),
		array( "pe-7s-micro" => esc_html__( "micro", "infinity" ) ),
		array( "pe-7s-menu" => esc_html__( "menu", "infinity" ) ),
		array( "pe-7s-map" => esc_html__( "map", "infinity" ) ),
		array( "pe-7s-map-marker" => esc_html__( "map marker", "infinity" ) ),
		array( "pe-7s-mail" => esc_html__( "mail", "infinity" ) ),
		array( "pe-7s-mail-open" => esc_html__( "mail open", "infinity" ) ),
		array( "pe-7s-mail-open-file" => esc_html__( "mail open file", "infinity" ) ),
		array( "pe-7s-magnet" => esc_html__( "magnet", "infinity" ) ),
		array( "pe-7s-loop" => esc_html__( "loop", "infinity" ) ),
		array( "pe-7s-look" => esc_html__( "look", "infinity" ) ),
		array( "pe-7s-lock" => esc_html__( "lock", "infinity" ) ),
		array( "pe-7s-lintern" => esc_html__( "lintern", "infinity" ) ),
		array( "pe-7s-link" => esc_html__( "link", "infinity" ) ),
		array( "pe-7s-like" => esc_html__( "like", "infinity" ) ),
		array( "pe-7s-light" => esc_html__( "light", "infinity" ) ),
		array( "pe-7s-less" => esc_html__( "less", "infinity" ) ),
		array( "pe-7s-keypad" => esc_html__( "keypad", "infinity" ) ),
		array( "pe-7s-junk" => esc_html__( "junk", "infinity" ) ),
		array( "pe-7s-info" => esc_html__( "info", "infinity" ) ),
		array( "pe-7s-home" => esc_html__( "home", "infinity" ) ),
		array( "pe-7s-help2" => esc_html__( "help2", "infinity" ) ),
		array( "pe-7s-help1" => esc_html__( "help1", "infinity" ) ),
		array( "pe-7s-graph3" => esc_html__( "graph3", "infinity" ) ),
		array( "pe-7s-graph2" => esc_html__( "graph2", "infinity" ) ),
		array( "pe-7s-graph1" => esc_html__( "graph1", "infinity" ) ),
		array( "pe-7s-graph" => esc_html__( "graph3", "infinity" ) ),
		array( "pe-7s-global" => esc_html__( "global", "infinity" ) ),
		array( "pe-7s-gleam" => esc_html__( "gleam", "infinity" ) ),
		array( "pe-7s-glasses" => esc_html__( "glasses", "infinity" ) ),
		array( "pe-7s-gift" => esc_html__( "gift", "infinity" ) ),
		array( "pe-7s-folder" => esc_html__( "folder", "infinity" ) ),
		array( "pe-7s-flag" => esc_html__( "flag", "infinity" ) ),
		array( "pe-7s-filter" => esc_html__( "filter", "infinity" ) ),
		array( "pe-7s-file" => esc_html__( "file", "infinity" ) ),
		array( "pe-7s-expand1" => esc_html__( "expand1", "infinity" ) ),
		array( "pe-7s-exapnd2" => esc_html__( "expand2", "infinity" ) ),
		array( "pe-7s-edit" => esc_html__( "edit", "infinity" ) ),
		array( "pe-7s-drop" => esc_html__( "drop", "infinity" ) ),
		array( "pe-7s-drawer" => esc_html__( "drawer", "infinity" ) ),
		array( "pe-7s-download" => esc_html__( "download", "infinity" ) ),
		array( "pe-7s-display2" => esc_html__( "display2", "infinity" ) ),
		array( "pe-7s-display1" => esc_html__( "display1", "infinity" ) ),
		array( "pe-7s-diskette" => esc_html__( "diskette", "infinity" ) ),
		array( "pe-7s-date" => esc_html__( "date", "infinity" ) ),
		array( "pe-7s-cup" => esc_html__( "cup", "infinity" ) ),
		array( "pe-7s-culture" => esc_html__( "culture", "infinity" ) ),
		array( "pe-7s-crop" => esc_html__( "crop", "infinity" ) ),
		array( "pe-7s-credit" => esc_html__( "credit", "infinity" ) ),
		array( "pe-7s-copy-file" => esc_html__( "copy file", "infinity" ) ),
		array( "pe-7s-config" => esc_html__( "config", "infinity" ) ),
		array( "pe-7s-compass" => esc_html__( "compass", "infinity" ) ),
		array( "pe-7s-comment" => esc_html__( "comment", "infinity" ) ),
		array( "pe-7s-coffee" => esc_html__( "coffee", "infinity" ) ),
		array( "pe-7s-cloud" => esc_html__( "cloud", "infinity" ) ),
		array( "pe-7s-clock" => esc_html__( "clock", "infinity" ) ),
		array( "pe-7s-check" => esc_html__( "check", "infinity" ) ),
		array( "pe-7s-chat" => esc_html__( "chat", "infinity" ) ),
		array( "pe-7s-cart" => esc_html__( "cart", "infinity" ) ),
		array( "pe-7s-camera" => esc_html__( "Camera", "infinity" ) ),
		array( "pe-7s-call" => esc_html__( "call", "infinity" ) ),
		array( "pe-7s-calculator" => esc_html__( "calculator", "infinity" ) ),
		array( "pe-7s-browser" => esc_html__( "browser", "infinity" ) ),
		array( "pe-7s-box2" => esc_html__( "box2", "infinity" ) ),
		array( "pe-7s-box1" => esc_html__( "box1", "infinity" ) ),
		array( "pe-7s-bookmarks" => esc_html__( "bookmarks", "infinity" ) ),
		array( "pe-7s-bicycle" => esc_html__( "bicycle", "infinity" ) ),
		array( "pe-7s-bell" => esc_html__( "bell", "infinity" ) ),
		array( "pe-7s-battery" => esc_html__( "battery", "infinity" ) ),
		array( "pe-7s-ball" => esc_html__( "ball", "infinity" ) ),
		array( "pe-7s-back" => esc_html__( "back", "infinity" ) ),
		array( "pe-7s-attention" => esc_html__( "attention", "infinity" ) ),
		array( "pe-7s-anchor" => esc_html__( "anchor", "infinity" ) ),
		array( "pe-7s-albums" => esc_html__( "albums", "infinity" ) ),
		array( "pe-7s-alarm" => esc_html__( "alarm", "infinity" ) ),
		array( "pe-7s-airplay" => esc_html__( "airplay", "infinity" ) ),
	);

	return array_merge( $icons, $pe7stroke_icons );
}
?>