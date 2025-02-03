<!-- biodata/research.php -->
<section class="publications">
    <h2>Selected Publications</h2>
    <div class="pub-table">
        <div class="pub-header">
            <span>Year</span>
            <span>Title</span>
            <span>Journal</span>
        </div>
        <?php
        $pubs = [
            ['2024', 'Comparative Study on Clinical and Echocardiographic Findings...', 'Mymensingh Med J'],
            ['2023', 'Assessment of Cardiac Risk Index in Gynecological...', 'Cardiol. Cardiovasc. Med.'],
            // Add 50+ publications
        ];
        
        foreach($pubs as $pub) {
            echo <<<HTML
            <div class="pub-row">
                <span>{$pub[0]}</span>
                <span>{$pub[1]}</span>
                <span>{$pub[2]}</span>
            </div>
            HTML;
        }
        ?>
    </div>
</section>