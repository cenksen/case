<div class="col-xl-4 col-lg-4">
    <div class="service-sidebar">

        <div class="sidebar-widget service-sidebar-single">
            <div class="service-details-help">
                <div class="help-shape-1"></div>
                <div class="help-shape-2"></div>
                <h2 class="help-title">Contact with <br> us for any <br> advice </h2>
                <div class="help-icon">
                    <span class=" lnr-icon-phone-handset"></span>
                </div>
                <div class="help-contact">
                    <p>Need help? Talk to an expert</p>
                    <a href="tel:12463330079">+892 ( 123 ) 112 - 9999</a>
                </div>
            </div>

            @if($service->getFirstMediaUrl('service_pdf'))
                <div class="sidebar-widget service-sidebar-single mt-4">
                    <div class="service-sidebar-single-btn wow fadeInUp animated" data-wow-delay="0.5s"
                         data-wow-duration="1200m"
                         style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                        <a href="{{$service->getFirstMediaUrl('service_pdf')}}" target="_blank"
                           class="theme-btn d-grid">
                      <span class="btn-title">
                        <span class="fas fa-file-pdf"></span> Katalog </span>
                        </a>
                    </div>
                </div>
            @endif
        </div>
    </div>
</div>
