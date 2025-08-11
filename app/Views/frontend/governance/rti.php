 <?= $this->extend('layout/frontend') ?>
<?= $this->section('content') ?> 

    <!-- Hero Banner -->
   <section class="hero-banner" data-aos="fade-up"style="position:relative; margin-top: 48px;">
    <img src="<?= base_url('public/uploads/' . ($hero['image'] ?? 'default.jpg')) ?>" alt="Brahma Valley Campus">
    <div class="hero-overlay"style=" margin-top: 50px;">
        <div>
            <h3 class="text-light"><?= esc($hero['title'] ?? 'Welcome to Brahma Valley B Ed College') ?></h2>
        </div>
    </div>
</section>

    <section class="l-section py-5">
        <div class="container">
            <!-- RTI Heading -->
            <div class="text-center mb-4">
                <h3>Right to Information</h3>
                <h3>RTI Committee</h3>
            </div>

            <!-- RTI Committee Table -->
            <div class="table-responsive mb-5">
                <table class="table table-bordered table-hover text-center">
                    <thead class="table-primary">
                        <tr>
                            <th>Sr.No.</th>
                            <th>Name of Person</th>
                            <th>Designation</th>
                            <th>Contact number & Email Id</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (!empty($members)): ?>
                            <?php $i = 1; ?>
                            <?php foreach ($members as $index => $row): ?>
                                <tr>
                                    <td><?= $i++ ?></td>
                                    <td><?= esc($row['name']) ?></td>
                                    <td><?= esc($row['designation']) ?></td>

                                    <?php
                                        // If current contact is same as previous, skip it to simulate rowspan visually
                                        $currentContact = $row['contact'] ?? '';
                                        $nextContact = $members[$index + 1]['contact'] ?? '';
                                        $showContact = true;

                                        if ($index > 0 && $currentContact === $members[$index - 1]['contact']) {
                                            $showContact = false;
                                        }

                                        $rowspan = 1;
                                        while (($members[$index + $rowspan]['contact'] ?? '') === $currentContact) {
                                            $rowspan++;
                                        }
                                    ?>

                                    <?php if ($showContact): ?>
                                        <td rowspan="<?= $rowspan ?>"><?= esc($row['contact']) ?></td>
                                    <?php endif; ?>
                                </tr>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <tr>
                                <td colspan="4">No members found.</td>
                            </tr>
                        <?php endif; ?>
                    </tbody>

                </table>
            </div>
        </div>
    </section>
<?= $this->endsection() ?>

<?= $this->section('custom_script') ?>

<?= $this->endsection() ?>