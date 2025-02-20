<!-- biodata/academic.php -->
<section class="qualifications">
    <h2>Academic Credentials</h2>
    <div class="qual-grid">
        <?php
        $degrees = [
            ['MBBS', 'Mymensingh Medical College', 'Dhaka University', '1984'],
            ['MD Cardiology', 'National Institute of Cardiovascular Diseases', 'Dhaka University', '1997'],
            ['FACC', 'American College of Cardiology', 'USA', '2005'],
            ['FRCP', 'Royal College of Physicians', 'Edinburgh', '2008'],
            ['Fellowship Training', 'National Heart Foundation Hospital', 'Dhaka', '1992-1994'],
            ['Advanced Cardiac Training', 'Mount Sinai Medical Center', 'New York, USA', '2003-2004']
        ];
        
        foreach($degrees as $degree) {
            echo <<<HTML
            <div class="degree-card">
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