<div class="fluid-container popup signup" data="signup" >
    <div class="popup-close">x</div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="popup-cont">
                <h3 class="title">welcome to the roi boutiqe</h3>
                <div class="account" id="step1">
                    
                    <div class="form-cont">
                        <form>
                            <div class="field">
                                <input type="text" name="name" placeholder="Name"/>
                            </div>
                            <div class="field">
                                <input type="password" name="password" placeholder="Password"/>
                            </div>
                            <div class="field">
                                <input type="password" name="vpassword" placeholder="Verify Password"/>
                            </div>
                            <div class="field button" id="cont">
                                    <button class="btn btn-primary">Continue</button>
                            </div>
                        </form>
                    </div>
                </div>
                    <div class="personal" id="step2">
                    
                        <div class="form-cont">
                            <form>
                                <div class="field">
                                    <input type="text" name="company" placeholder="Company"/>
                                </div>
                                <div class="field">
                                    <input type="text" name="fname" placeholder="First Name"/>
                                </div>
                                <div class="field">
                                    <input type="text" name="lname" placeholder="Last Name"/>
                                </div>
                                <div class="field">
                                    <input type="text" name="skype" placeholder="Skype"/>
                                </div>
                                <div class="checkboxes">
                                <div class="checkbox-list">
            <label class="checkbox-title">Vertical</label>
                 <label class="container">MMO
                    <input value="MMO" name="verticalCheck" type="checkbox">
                    <span class="checkmark"></span>
                </label>
                <label class="container">CFD
                    <input value="CFD" name="verticalCheck" type="checkbox">
                    <span class="checkmark"></span>
                </label>
                <label class="container">Casino
                    <input value="Casino" name="verticalCheck" type="checkbox">
                    <span class="checkmark"></span>
                </label>
                <label class="container">Lotto
                    <input value="Lotto" name="verticalCheck" type="checkbox">
                    <span class="checkmark"></span>
                </label>
                <label class="container">Other
                    <input value="other" name="" type="checkbox" onclick="if (this.checked){ $('#otherVertical').show();}else{$('#otherVertical').hide();}">
                    <span class="checkmark"></span>
                </label>
                <textarea class="other" data="verticalCheck" id="otherVertical" name="otherVertical" style="display:none"></textarea>

            </div>
            <div class="checkbox-list">
            <label class="checkbox-title">Media type</label>
                 <label class="container">SEO
                    <input value="SEO" name="mediaCheck" type="checkbox">
                    <span class="checkmark"></span>
                </label>
                <label class="container">Media
                    <input value="Media" name="mediaCheck" type="checkbox">
                    <span class="checkmark"></span>
                </label>
                <label class="container">Email
                    <input value="Email" name="mediaCheck" type="checkbox">
                    <span class="checkmark"></span>
                </label>
                <label class="container">Marketing
                    <input value="Marketing" name="mediaCheck" type="checkbox">
                    <span class="checkmark"></span>
                </label>
                <label class="container">PPC
                    <input value="PPC" name="mediaCheck" type="checkbox">
                    <span class="checkmark"></span>
                </label>
                <label name="mediaCheck" class="container">FB
                    <input name="mediaCheck" value="FB" type="checkbox">
                    <span class="checkmark"></span>
                </label>
                <label class="container">Other
                    <input value="Other" name="" type="checkbox" onclick="if (this.checked){ $('#otherMedia').show();}else{$('#otherMedia').hide();}">
                    <span class="checkmark"></span>
                </label>
                <textarea class="other" data="mediaCheck" id="otherMedia" name="otherMedia" style="display:none"></textarea>
            </div>
                                </div>
                                <div class="field button" id="send">
                                    <button class="btn btn-primary">Send</button>
                            </div>
                            </form>
                        </div>
                    </div>

                </div>
                <div class="popup-detail">
                <div class="step-number">
                        <span class="step1 active">1</span>
                        <span class="step2">2</span>
                    </div>
                    <div class="step-label">
                        <div>Account Details</div>
                        <div>Personal Details</div>
                    </div>
                     </div>
            </div>
        </div>
    </div>
</div>