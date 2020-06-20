{include file="header.tpl"}

<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
<div class="kt-portlet kt-portlet--mobile">
   <div class="kt-portlet__body">
     <div class="kt-portlet__body kt-portlet__body--fit">
		<div class="kt-wizard-v3" id="addFunds" data-ktwizard-state="step-first">
			<div class="kt-wizard-v3__nav">
				<div class="kt-wizard-v3__nav-line"></div>
				<div class="kt-wizard-v3__nav-items">
					<div class="kt-wizard-v3__nav-item" href="#" data-ktwizard-type="step" data-ktwizard-state="current">
						<span>1</span>
						<i class="fa fa-check"></i>
						<div class="kt-wizard-v3__nav-label">Topup</div>
					</div>
					<div class="kt-wizard-v3__nav-item" href="#" data-ktwizard-type="step">
						<span>2</span>
						<i class="fa fa-check"></i>
						<div class="kt-wizard-v3__nav-label">Pending</div>
					</div>
					<div class="kt-wizard-v3__nav-item" href="#" data-ktwizard-type="step">
						<span>3</span>
						<i class="fa fa-check"></i>
						<div class="kt-wizard-v3__nav-label">Confirming</div>
					</div>
				</div>
			</div>

			<form class="kt-form" id="kt_form">

				<div class="kt-wizard-v3__content" data-ktwizard-type="step-content" data-ktwizard-state="current">
					<div class="kt-heading kt-heading--md" style="text-align:center">Topup</div>
					<div class="kt-separator kt-separator--height-xs"></div>
					<div class="kt-form__section kt-form__section--first">
						<div class="form-group">
							<label>Amount:</label>
							<input type="number" class="form-control" name="amount" placeholder="Enter amount" value="">
							<span class="form-text text-muted">Please enter your desired amount of topup</span>
						</div>
					</div>
				</div>

				<div class="kt-wizard-v3__content" data-ktwizard-type="step-content">
          <div class="d-flex justify-content-center">
                    <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                        <span class="sr-only">Waiting...</span>
                    </div>
                </div>
					<div class="kt-heading kt-heading--md" style="text-align:center">Awaiting for payment</div>
          <span class="form-text text-muted" id="expirationTime" style="text-align:center; margin-top:-20px;"></span>
					<div class="kt-separator kt-separator--height-xs"></div>
					<div class="kt-form__section kt-form__section--first">
						<div class="row">
							<div class="col-xl-12">
								<div class="form-group">
									<label>Amount:</label>
									<input type="text" class="form-control" name="paymentAmount" value="" readonly>
									<span class="form-text text-muted">Amount to be exactly paid</span>
								</div>
							</div>
						</div>
            <div class="row">
              <div class="col-xl-12">
                <div class="form-group">
                  <label>BTC Address:</label>
                  <input type="text" class="form-control" name="paymentAddress" value="" readonly>
                  <span class="form-text text-muted">Address to send the payment</span>
                </div>
              </div>
            </div>
					</div>
				</div>

				<div class="kt-wizard-v3__content" data-ktwizard-type="step-content">
					<div class="kt-heading kt-heading--md" style="text-align:center">Payment Confirming</div>
					<div class="kt-separator kt-separator--height-xs"></div>
					<div class="kt-form__section kt-form__section--first">
						<div class="row">
							<div class="col-xl-12">
								<div class="form-group">
                  <div class="d-flex justify-content-center">
                            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                                <span class="sr-only">Confirming...</span>
                            </div>
                        </div>
									<span class="form-text" style="text-align:center; margin-top:60px;">Waiting for blockchain confirmation 0/2</span>
                  <span class="form-text text-muted" style="text-align:center">Do not close this window!</span>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="kt-form__actions">
					<div class="btn btn-brand btn-md btn-tall btn-wide btn-bold btn-upper" data-ktwizard-type="action-next">
						Topup
					</div>
				</div>
			</form>
		</div>
	</div>
   </div>
</div>


</div>
</div>

{include file="footer.tpl"}
