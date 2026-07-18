        <!-- footer area start -->
        <footer class="rs-footer-area rs-footer-one">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="rs-footer-wrapper">
                            <div class="rs-footer-left">
                                <div class="rs-footer-widget footer-1-col-1">
                                    <div class="rs-footer-widget-logo">
                                        <a href="<?= base_url() ?>">
                                            <img src="<?= base_url() ?>images/bangunan/logo.png" alt="logo" style="max-height:65px;width:auto;filter:brightness(0) invert(1);">
                                        </a>
                                    </div>
                                    <div class="rs-footer-widget-content">
                                        <div class="rs-footer-widget-contact-info">
                                            <div class="rs-footer-content-item">
                                                <span><?= lang_trans('phone') ?>:</span>
                                                <a href="tel:<?= esc(site_setting('phone')) ?>"><?= esc(site_setting('phone')) ?></a>
                                            </div>
                                            <div class="rs-footer-content-item">
                                                <span>Email:</span>
                                                <a href="mailto:<?= esc(site_setting('email')) ?>"><?= esc(site_setting('email')) ?></a>
                                            </div>
                                        </div>
                                        <div class="rs-footer-widget-social">
                                            <span class="rs-footer-social-title">Social Link:</span>
                                            <div class="rs-footer-social theme-social has-radius-none has-medium hover-yellow has-theme-blue">
                                                <a href="<?= esc(site_setting('facebook')) ?>">
                                                    <i class="ri-facebook-fill text-white fs-5"></i>
                                                </a>
                                                <a href="<?= esc(site_setting('instagram')) ?>">
                                                    <i class="ri-instagram-fill text-white fs-5"></i>
                                                </a>
                                                <a href="<?= esc(site_setting('youtube')) ?>">
                                                    <i class="ri-youtube-fill text-white fs-5"></i>
                                                </a>
                                                <a href="<?= esc(site_setting('linkedin')) ?>">
                                                    <i class="ri-linkedin-fill text-white fs-5"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="rs-footer-right">
                                <div class="rs-footer-widget-wrapper">
                                    <div class="rs-footer-widget footer-1-col-2">
                                        <h5 class="rs-footer-widget-title"><?= lang_trans('our_foundation') ?></h5>
                                        <div class="rs-footer-widget-link has-theme-yellow">
                                            <ul>
                                                <li>
                                                    <a href="<?= base_url('about') ?>"><?= lang_trans('about_us') ?></a>
                                                </li>
                                                <li>
                                                    <a href="<?= base_url('alumni') ?>"><?= lang_trans('alumni') ?></a>
                                                </li>
                                                <li>
                                                    <a href="<?= base_url('libraries') ?>"><?= lang_trans('library') ?></a>
                                                </li>
                                                <li>
                                                    <a href="<?= base_url('campus-life') ?>"><?= lang_trans('campus_life') ?></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="rs-footer-widget footer-1-col-3">
                                        <h5 class="rs-footer-widget-title"><?= lang_trans('academics') ?></h5>
                                        <div class="rs-footer-widget-link has-theme-yellow">
                                            <ul>
                                                <li>
                                                    <a href="<?= base_url('teachers') ?>"><?= lang_trans('teachers') ?></a>
                                                </li>
                                                <li>
                                                    <a href="<?= base_url('program') ?>"><?= lang_trans('programs') ?></a>
                                                </li>
                                                <li>
                                                    <a href="<?= base_url('events') ?>"><?= lang_trans('events') ?></a>
                                                </li>
                                                <li>
                                                    <a href="<?= base_url('how-to-apply') ?>"><?= lang_trans('how_to_apply') ?></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="rs-footer-widget footer-1-col-4">
                                        <h5 class="rs-footer-widget-title">Newsletter</h5>
                                        <div class="rs-cta-input">
                                            <input id="email2" name="name" type="text" placeholder="Masukkan email Anda">
                                            <button type="submit" class="rs-square-btn has-icon has-transparent is-white">
                                                <span class="icon-box">
                                                    <svg class="icon-first" width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M12.0743 8.70831L0.916528 8.70831L0.916528 6.87526L12.0737 6.87461L7.15722 1.95816L8.45358 0.661793L15.5836 7.79179L8.45358 14.9218L7.15722 13.6254L12.0743 8.70831Z" fill="white"></path>
                                                    </svg>
                                                    <svg class="icon-second" width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M12.0743 8.70831L0.916528 8.70831L0.916528 6.87526L12.0737 6.87461L7.15722 1.95816L8.45358 0.661793L15.5836 7.79179L8.45358 14.9218L7.15722 13.6254L12.0743 8.70831Z" fill="white"></path>
                                                    </svg>
                                                </span>
                                            </button>
                                            <div class="rs-form-check">
                                                <input id="remeber" type="checkbox">
                                                <label for="remeber">Saya setuju dengan ketentuan & kebijakan privasi</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="rs-footer-copyright-area rs-copyright-one">
                                    <div class="rs-footer-copyright-wrapper">
                                        <div class="rs-footer-copyright-right">
                                            <div class="rs-footer-copyright-item">
                                                <div class="rs-footer-copyright">
                                                    <p class="underline">
                                                        Copyright © <span id="year"><?= date('Y') ?></span>
                                                        <?= esc(site_setting('site_name')) ?>. All Rights Reserved.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="rs-footer-copyright-left">
                                            <div class="rs-footer-copyright-item">
                                                <div class="rs-footer-copyright-link">
                                                    <a href="#">Ketentuan & Perjanjian</a>
                                                </div>
                                            </div>
                                            <div class="rs-footer-copyright-item">
                                                <div class="rs-footer-copyright-link">
                                                    <a href="#">Kebijakan Privasi</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer area end -->
