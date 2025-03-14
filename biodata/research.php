<?php require_once '../includes/header.php'; ?>

<section class="cv-section" data-scroll>
    <h2>Research Interests</h2>
    
    <div class="card-grid">
        <?php
        $interests = [
            ['Interventional Cardiology', 'Focusing on novel techniques for complex coronary interventions and structural heart disease treatments.', 0],
            ['Cardiovascular Epidemiology', 'Studying patterns and risk factors of cardiovascular diseases in South Asian populations.', 1],
            ['Preventive Cardiology', 'Developing strategies for primary and secondary prevention of heart disease in resource-limited settings.', 2],
            ['Heart Failure Management', 'Investigating optimal treatment approaches for heart failure patients in developing countries.', 3]
        ];
        
        foreach($interests as $interest) {
            echo <<<HTML
            <div class="qual-card" style="--item-index: {$interest[2]}">
                <h3>{$interest[0]}</h3>
                <p>{$interest[1]}</p>
            </div>
            HTML;
        }
        ?>
    </div>
</section>

<section class="cv-section" data-scroll>
    <h2>Ongoing Research Projects</h2>
    
    <div class="publications-section">
        <?php
        $projects = [
            ['Cardiovascular Outcomes in Post-COVID Patients', 'A longitudinal study examining long-term cardiovascular effects in patients recovered from COVID-19.', '2021-Present', 0],
            ['Telemedicine for Rural Cardiac Care', 'Implementation and evaluation of telemedicine solutions for cardiac patients in rural Bangladesh.', '2020-Present', 1],
            ['Genetic Markers in South Asian CAD Patients', 'Collaborative international study identifying genetic risk factors specific to South Asian populations.', '2019-Present', 2]
        ];
        
        foreach($projects as $project) {
            echo <<<HTML
            <div class="expandable-cv-section" style="--item-index: {$project[3]}">
                <div class="expandable-header">
                    <h3>{$project[0]}</h3>
                    <div class="toggle-icon"></div>
                </div>
                <div class="expandable-content">
                    <p>{$project[1]}</p>
                    <p class="project-duration"><strong>Duration:</strong> {$project[2]}</p>
                </div>
            </div>
            HTML;
        }
        ?>
    </div>
</section>

<section class="cv-section" data-scroll>
    <h2>Research Collaborations</h2>
    
    <div class="card-grid">
        <?php
        $collaborations = [
            ['World Health Organization', 'Cardiovascular Disease Prevention Initiative', '2018-Present', 0],
            ['Harvard Medical School', 'Global Cardiology Research Network', '2015-Present', 1],
            ['Imperial College London', 'South Asian Heart Disease Study Group', '2017-2022', 2],
            ['National Heart Foundation, Bangladesh', 'Hypertension Control Program', '2010-Present', 3]
        ];
        
        foreach($collaborations as $collab) {
            echo <<<HTML
            <div class="qual-card" style="--item-index: {$collab[3]}">
                <h3>{$collab[0]}</h3>
                <p class="institution">{$collab[1]}</p>
                <div class="meta">
                    <span>{$collab[2]}</span>
                </div>
            </div>
            HTML;
        }
        ?>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Add click event to expandable sections
        document.querySelectorAll('.expandable-header').forEach(header => {
            header.addEventListener('click', function() {
                const section = this.closest('.expandable-cv-section');
                section.classList.toggle('expanded');
            });
        });
    });
</script>

<?php require_once '../includes/footer.php'; ?>