<?php
    if (!defined('MEDIAWIKI')) {
        die("This is an extension to the MediaWiki package and cannot be run standalone.");
    }

    $wgExtensionCredits['skin'][] = array(
        'path'        => __FILE__,
        'name'        => 'kiwitic',
        'url'         => 'https://github.com/kdo9921/Kiwitic',
        'author'      => 'cosmic 원본, 김동동 수정, 2DU 수정, 키위 수정',
        'description' => 'Kiwitic 부트스트랩 테마를 미디어위키에 적용합니다.',
        'license-name' => "Free License",
        'version' => '16-12-05 일반',
    );

    $wgValidSkinNames['kiwitic'] = 'Kiwitic';
    $wgAutoloadClasses['SkinKiwitic'] = __DIR__ . '/kiwitic.skin.php';
?>