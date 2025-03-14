<?php require_once '../includes/header.php'; ?>

<section class="cv-section" data-scroll>
    <h2>Awards & Recognitions</h2>
    
    <div class="awards-grid">
        <?php
        $awards = [
            ['National Cardiology Excellence Award', 'Bangladesh Medical Association', '2018', 'For outstanding contributions to cardiovascular medicine in Bangladesh', 0],
            ['Lifetime Achievement Award', 'South Asian Cardiac Society', '2015', 'For pioneering work in interventional cardiology', 1],
            ['Distinguished Service Medal', 'Ministry of Health', '2012', 'For exceptional service to public healthcare', 2],
            ['Bangladesh Medical Association Gold Medal', 'BMA', '1999', 'For research contributions in cardiology', 3],
            ['International Fellow Recognition', 'American College of Cardiology', '2005', 'For advancing cardiovascular care globally', 4]
        ];
        
        foreach($awards as $award) {
            echo <<<HTML
            <div class="award-card" style="--item-index: {$award[4]}">
                <span class="award-year">{$award[2]}</span>
                <h3>{$award[0]}</h3>
                <p class="award-org">{$award[1]}</p>
                <p>{$award[3]}</p>
            </div>
            HTML;
        }
        ?>
    </div>
</section>

<section class="cv-section" data-scroll>
    <h2>International Recognition</h2>
    
    <div class="awards-grid">
        <?php
        $international = [
            ['Visiting Professor', 'Harvard Medical School', '2008', 'Delivered lectures on advances in cardiac care in developing nations', 0],
            ['Honorary Fellow', 'European Society of Cardiology', '2010', 'For contributions to cardiology education and research', 1],
            ['Distinguished Speaker', 'World Congress of Cardiology', '2014', 'Keynote address on cardiovascular disease prevention', 2]
        ];
        
        foreach($international as $recog) {
            echo <<<HTML
            <div class="award-card" style="--item-index: {$recog[4]}">
                <span class="award-year">{$recog[2]}</span>
                <h3>{$recog[0]}</h3>
                <p class="award-org">{$recog[1]}</p>
                <p>{$recog[3]}</p>
            </div>
            HTML;
        }
        ?>
    </div>
</section>

<?php require_once '../includes/footer.php'; ?>