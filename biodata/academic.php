<?php require_once '../includes/header.php'; ?>

<section class="cv-section" data-scroll>
    <h2>Academic Credentials</h2>
    
    <div class="card-grid">
        <?php
        $degrees = [
            ['MBBS', 'Mymensingh Medical College', 'Dhaka University', '1984', 0],
            ['MD Cardiology', 'National Institute of Cardiovascular Diseases', 'Dhaka University', '1997', 1],
            ['FACC', 'American College of Cardiology', 'USA', '2005', 2],
            ['FRCP', 'Royal College of Physicians', 'Edinburgh', '2008', 3],
            ['Fellowship Training', 'National Heart Foundation Hospital', 'Dhaka', '1992-1994', 4],
            ['Advanced Cardiac Training', 'Mount Sinai Medical Center', 'New York, USA', '2003-2004', 5]
        ];
        
        foreach($degrees as $degree) {
            echo <<<HTML
            <div class="qual-card" style="--item-index: {$degree[4]}">
                <h3>{$degree[0]}</h3>
                <p class="institution">{$degree[1]}</p>
                <div class="meta">
                    <span>{$degree[2]}</span>
                    <span>{$degree[3]}</span>
                </div>
            </div>
            HTML;
        }
        ?>
    </div>
</section>

<section class="cv-section" data-scroll>
    <h2>Professional Certifications</h2>
    
    <div class="card-grid">
        <?php
        $certifications = [
            ['Interventional Cardiology', 'American Board of Cardiology', 'USA', '2006', 0],
            ['Advanced Cardiac Life Support', 'American Heart Association', 'USA', '2004', 1],
            ['Echocardiography', 'European Society of Cardiology', 'Europe', '2007', 2],
            ['Cardiac CT Angiography', 'Society of Cardiovascular Computed Tomography', 'USA', '2010', 3]
        ];
        
        foreach($certifications as $cert) {
            echo <<<HTML
            <div class="qual-card" style="--item-index: {$cert[4]}">
                <h3>{$cert[0]}</h3>
                <p class="institution">{$cert[1]}</p>
                <div class="meta">
                    <span>{$cert[2]}</span>
                    <span>{$cert[3]}</span>
                </div>
            </div>
            HTML;
        }
        ?>
    </div>
</section>

<?php require_once '../includes/footer.php'; ?>