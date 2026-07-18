<?= $this->extend('layout/main') ?>

<?= $this->section('title') ?><?= service('request')->getLocale() == 'id' ? 'Agenda Kegiatan - Yayasan Khalifah Latif Cendaka' : 'Events Calendar - Yayasan Khalifah Latif Cendaka' ?><?= $this->endSection() ?>

<?= $this->section('description') ?><?= service('request')->getLocale() == 'id' ? 'Jadwal agenda kegiatan, tabligh akbar, seminar pendidikan, pentas seni, dan bakti sosial Yayasan Khalifah Latif Cendaka.' : 'Schedule of events, public lectures, educational seminars, art performances, and social services at Yayasan Khalifah Latif Cendaka.' ?><?= $this->endSection() ?>

<?= $this->section('content') ?>
    <!-- Breadcrumb Area Start -->
    <section class="rs-breadcrumb-area rs-breadcrumb-one include-bg" style="background-image: url('<?= base_url('images/bangunan/gedung.webp') ?>'); background-size: cover; background-position: center; padding: 100px 0; position: relative;">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="rs-breadcrumb-content-wrapper text-center" style="position: relative; z-index: 2;">
                        <h1 class="rs-breadcrumb-title" style="color: #ffffff; font-size: 48px; font-weight: 700; margin-bottom: 15px;"><?= service('request')->getLocale() == 'id' ? 'Agenda Kegiatan' : 'Events Calendar' ?></h1>
                        <div class="rs-breadcrumb-menu">
                            <ul class="d-flex justify-content-center align-items-center gap-10" style="list-style: none; padding: 0; margin: 0; color: #ffffff;">
                                <li><a href="<?= base_url() ?>" style="color: #ffc107; text-decoration: none;"><?= service('request')->getLocale() == 'id' ? 'Beranda' : 'Home' ?></a></li>
                                <li><span class="rs-breadcrumb-icon" style="color: #ffffff;"><i class="ri-arrow-right-double-line"></i></span></li>
                                <li><span style="color: #ffffff;"><?= service('request')->getLocale() == 'id' ? 'Agenda Kegiatan' : 'Events' ?></span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="breadcrumb-overlay" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 33, 71, 0.8); z-index: 1;"></div>
    </section>
    <!-- Breadcrumb Area End -->

    <!-- Events List Section -->
    <section class="section-space" style="padding: 80px 0; background: #ffffff;">
        <div class="container">
            <div class="text-center" style="max-width: 600px; margin: 0 auto 50px;">
                <span style="font-size: 14px; font-weight: 700; color: #ffc107; text-transform: uppercase; letter-spacing: 1px; display: block; margin-bottom: 10px;"><?= service('request')->getLocale() == 'id' ? 'Kalender Akademik & Sosial' : 'Academic & Social Calendar' ?></span>
                <h2 style="font-size: 32px; font-weight: 700; color: #08284e;"><?= service('request')->getLocale() == 'id' ? 'Jadwal Kegiatan' : 'Upcoming & Past Events' ?></h2>
            </div>
            
            <div class="row g-4 justify-content-center">
                <?php if (!empty($events)): ?>
                    <?php foreach ($events as $row): ?>
                        <?php
                            $dateTime = strtotime($row->date);
                            $day = date('d', $dateTime);
                            if (service('request')->getLocale() == 'id') {
                                $months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
                                $monthName = $months[(int)date('m', $dateTime) - 1] . ' ' . date('Y', $dateTime);
                            } else {
                                $monthName = date('F Y', $dateTime);
                            }
                        ?>
                        <div class="col-lg-10">
                            <div style="background: #ffffff; border: 1px solid #eee; border-radius: 10px; overflow: hidden; box-shadow: 0 5px 20px rgba(0,0,0,0.02); display: flex; flex-wrap: wrap;">
                                <div style="background: #08284e; color: #ffffff; padding: 40px; text-align: center; display: flex; flex-direction: column; align-items: center; justify-content: center; min-width: 180px;" class="text-center">
                                    <span style="font-size: 36px; font-weight: 700; line-height: 1; display: block; margin-bottom: 5px;"><?= $day ?></span>
                                    <span style="font-size: 14px; text-transform: uppercase; font-weight: 600; letter-spacing: 1px; color: #ffc107;"><?= $monthName ?></span>
                                </div>
                                <div style="padding: 30px; flex-grow: 1; flex-basis: 300px; display: flex; flex-direction: column; justify-content: space-between;">
                                    <div>
                                        <h4 style="font-size: 20px; font-weight: 700; color: #08284e; margin-bottom: 10px;"><?= esc(lang_field($row, 'title')) ?></h4>
                                        <p style="font-size: 14px; color: #666; line-height: 1.6; margin-bottom: 15px;">
                                            <i class="ri-map-pin-line" style="color: #ffc107;"></i> <?= esc(lang_field($row, 'venue')) ?> | 
                                            <i class="ri-time-line" style="color: #ffc107;"></i> <?= esc($row->time) ?>
                                        </p>
                                    </div>
                                    <p style="font-size: 14px; color: #555; line-height: 1.6; margin: 0;"><?= esc(lang_field($row, 'content')) ?></p>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <div class="col-12 text-center">
                        <p style="color: #999;"><?= service('request')->getLocale() == 'id' ? 'Tidak ada agenda kegiatan.' : 'No events found.' ?></p>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section>
<?= $this->endSection() ?>
