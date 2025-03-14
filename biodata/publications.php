<?php require_once '../includes/header.php'; ?>

<section class="cv-section" data-scroll>
    <h2>Research Publications</h2>
    
    <div class="publications-section">
        <div class="pub-header">
            <span>Year</span>
            <span>Title</span>
            <span>Journal</span>
        </div>
        
        <?php
        $publications = [
            ['2023', 'Long-term Outcomes of Percutaneous Coronary Intervention in Elderly Patients with Acute Coronary Syndrome', 'Bangladesh Heart Journal', 0],
            ['2022', 'Comparative Analysis of Drug-Eluting Stents vs. Bare-Metal Stents in South Asian Population', 'International Journal of Cardiology', 1],
            ['2021', 'Prevalence of Cardiovascular Risk Factors Among Urban and Rural Populations in Bangladesh', 'BMC Public Health', 2],
            ['2020', 'Impact of COVID-19 on Cardiovascular Health Services in Developing Nations', 'Global Heart', 3],
            ['2019', 'Echocardiographic Assessment of Left Ventricular Function in Rheumatic Heart Disease', 'Journal of Cardiovascular Ultrasound', 4],
            ['2018', 'Management Strategies for Acute Myocardial Infarction in Resource-Limited Settings', 'World Journal of Cardiology', 5],
            ['2017', 'Hypertension Control and Cardiovascular Outcomes: A Prospective Cohort Study', 'Hypertension Research', 6],
            ['2016', 'Diabetes and Coronary Artery Disease: Patterns and Risk Factors in Bangladesh', 'Diabetes Care', 7],
            ['2015', 'Evaluation of Cardiac Rehabilitation Programs in Urban Bangladesh', 'Rehabilitation Medicine International', 8],
            ['2014', 'Atrial Fibrillation in South Asian Populations: Epidemiology and Management', 'Heart Asia', 9],
            ['2013', 'Cost-effectiveness of Preventive Cardiology Interventions in Low-Resource Settings', 'Preventive Cardiology', 10],
            ['2012', 'Outcomes of Coronary Artery Bypass Surgery vs. Percutaneous Coronary Intervention', 'Asian Cardiovascular and Thoracic Annals', 11]
        ];
        
        foreach($publications as $pub) {
            echo <<<HTML
            <div class="pub-row" style="--item-index: {$pub[3]}">
                <span>{$pub[0]}</span>
                <span>{$pub[1]}</span>
                <span>{$pub[2]}</span>
            </div>
            HTML;
        }
        ?>
    </div>
</section>

<section class="cv-section" data-scroll>
    <h2>Book Chapters & Reviews</h2>
    
    <div class="publications-section">
        <div class="pub-header">
            <span>Year</span>
            <span>Title</span>
            <span>Publisher</span>
        </div>
        
        <?php
        $books = [
            ['2021', 'Cardiovascular Disease Management in South Asia', 'Oxford University Press', 0],
            ['2019', 'Advances in Interventional Cardiology: A South Asian Perspective', 'Springer Healthcare', 1],
            ['2017', 'Hypertension Management Guidelines for Developing Nations', 'World Health Organization', 2],
            ['2015', 'Preventive Cardiology: Evidence-Based Approaches', 'Elsevier Health Sciences', 3],
            ['2012', 'Rheumatic Heart Disease: A Comprehensive Review', 'Cambridge University Press', 4]
        ];
        
        foreach($books as $book) {
            echo <<<HTML
            <div class="pub-row" style="--item-index: {$book[3]}">
                <span>{$book[0]}</span>
                <span>{$book[1]}</span>
                <span>{$book[2]}</span>
            </div>
            HTML;
        }
        ?>
    </div>
</section>

<?php require_once '../includes/footer.php'; ?>