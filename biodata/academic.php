<!-- biodata/academic.php -->
<section class="qualifications">
    <h2>Academic Credentials</h2>
    <div class="qual-grid">
        <?php
        $degrees = [
            ['MBBS', 'Mymensingh Medical College', 'Dhaka University', '1984'],
            ['MD Cardiology', 'Dhaka University', 'Dhaka University', '1997'],
            // Add all degrees from CV
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