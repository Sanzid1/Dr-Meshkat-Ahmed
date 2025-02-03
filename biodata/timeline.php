<!-- biodata/timeline.php -->
<section class="timeline">
    <h2>Professional Journey</h2>
    <div class="timeline-container">
        <?php
        $positions = [
            ['1984-1988', 'Medical Officer', 'Dhaka Medical College Hospital'],
            ['1999-2001', 'Assistant Professor', 'Dhaka Medical College'],
            // Add all positions from CV
        ];
        
        foreach($positions as $pos) {
            echo <<<HTML
            <div class="timeline-item">
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
</section>