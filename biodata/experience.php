<?php require_once '../includes/header.php'; ?>

<section class="cv-section" data-scroll>
    <h2>Professional Experience</h2>
    
    <div class="timeline">
        <div class="timeline-container">
            <?php
            $positions = [
                ['2015-Present', 'Emeritus Professor of Cardiology', 'Dhaka Medical College', 0],
                ['2010-2015', 'Professor & Head of Department', 'National Institute of Cardiovascular Diseases', 1],
                ['2005-2010', 'Professor of Cardiology', 'Bangabandhu Sheikh Mujib Medical University', 2],
                ['2000-2005', 'Associate Professor', 'National Institute of Cardiovascular Diseases', 3],
                ['1995-2000', 'Assistant Professor', 'Dhaka Medical College', 4],
                ['1990-1995', 'Consultant Cardiologist', 'National Heart Foundation Hospital', 5],
                ['1985-1990', 'Medical Officer', 'Dhaka Medical College Hospital', 6]
            ];
            
            foreach($positions as $pos) {
                echo <<<HTML
                <div class="timeline-item" style="--item-index: {$pos[3]}">
                    <div class="timeline-date">{$pos[0]}</div>
                    <div class="timeline-content">
                        <h3>{$pos[1]}</h3>
                        <p>{$pos[2]}</p>
                    </div>
                </div>
                HTML;
            }
            ?>
        </div>
    </div>
</section>

<section class="cv-section" data-scroll>
    <h2>Hospital Affiliations</h2>
    
    <div class="card-grid">
        <?php
        $affiliations = [
            ['Chief Consultant', 'United Hospital', 'Dhaka', '2012-Present', 0],
            ['Visiting Consultant', 'Apollo Hospitals', 'Dhaka', '2008-Present', 1],
            ['Honorary Consultant', 'National Heart Foundation', 'Dhaka', '2005-Present', 2],
            ['Visiting Professor', 'Ibrahim Cardiac Hospital', 'Dhaka', '2010-2018', 3]
        ];
        
        foreach($affiliations as $affiliation) {
            echo <<<HTML
            <div class="qual-card" style="--item-index: {$affiliation[4]}">
                <h3>{$affiliation[0]}</h3>
                <p class="institution">{$affiliation[1]}</p>
                <div class="meta">
                    <span>{$affiliation[2]}</span>
                    <span>{$affiliation[3]}</span>
                </div>
            </div>
            HTML;
        }
        ?>
    </div>
</section>

<?php require_once '../includes/footer.php'; ?>