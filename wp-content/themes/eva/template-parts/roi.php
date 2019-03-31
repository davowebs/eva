<div class="calculator">
        <div class="row">
            <div class="col-xs-12 col-sm-9">
                <div class="calculator__values">

                    <h4 class="calculator__parameter">Initial Investment</h4>
                    <p class="calculator__desc">Cost for 1 robotic solution, with 1 robot arm + 1 gripper costing ~ £4990 + £1000</p>
                    
                    <h4 class="calculator__parameter">Number of shifts / day: 
                        <span class="calculator__label" id="shifts_label">8</span>
                    </h4>
                    <input type="range" min="1" max="12" value="8" class="calculator__slider" id="shifts">

                    <h4 class="calculator__parameter">Number of days / week:
                        <span class="calculator__label" id="days_label">5</span>
                    </h4>
                    <input type="range" min="1" max="7" value="5" class="calculator__slider" id="days">
                    

                    <h4 class="calculator__parameter">Number of weeks / year:
                        <span class="calculator__label" id="weeks_label">50</span>
                    </h4>
                    <input type="range" min="1" max="52" value="50" class="calculator__slider" id="weeks">
                    

                    <h4 class="calculator__parameter">Hourly Wage:
                        <span class="calculator__label" id="wage_label">12</span>
                    </h4>
                    <input type="range" min="10" max="30" value="12" class="calculator__slider" id="wage">
                    

                    <h4 class="calculator__parameter">Number of shifts / day operational:
                        <span class="calculator__label" id="shifts_current_label">5</span>
                    </h4>
                    <p class="calculator__desc">same or more than current / non-automated</p>
                    <input type="range" min="0" max="7" value="5" class="calculator__slider" id="shifts_current">
                    

                    <h4 class="calculator__parameter">Hours of the person’s time liberated:
                        <span class="calculator__label" id="hours_current_label">8</span>
                    </h4>
                    <p class="calculator__desc">How many hours/day is the person doing the task being automated</p>
                    <input type="range" min="0" max="12" value="8" class="calculator__slider" id="hours_current">

                    <a href="https://www.google.com/search?q=18010+GBP+to+USD" class="currency" target="_blank">Currency Converter</a>
                    
                </div>
                
            </div>
            <div class="col-xs-12 col-sm-3">
                <div class="calculator__result around-xs center-xs">
                <div id="overlay"></div>
                <svg xmlns="http://www.w3.org/2000/svg" width="47" height="42" id="loading">
						<path d="M36.684,29.955a6.063,6.063,0,1,1,3.032,11.314H17.087Z"></path>
						<path d="M12.13,35.2A6.063,6.063,0,1,1,.816,32.171l11.314-19.6Q12.13,23.888,12.13,35.2Z"></path>
						<path d="M19.862,11.315a6.063,6.063,0,1,1,8.282-8.282l11.314,19.6Z"></path>
					</svg>
                    <div class="calculator__result-box one">
                        <p class="calculator__result__title">
                            Annual Savings
                        </p>
                        <div class="savings" id="savings">18010</div>
                    </div>
                    <div class="calculator__result-box two">
                        <p class="calculator__result__title-repayment">
                            Monthly Repayment
                        </p>
                        <div class="payback" id="payback">499.16</div>
                    </div>
                    <div class="calculator__result-box three">
                        <p class="calculator__result__title-period">
                            Number of Months
                        </p>
                        <div class="duration" id="duration">12</div>
                    </div>
                    <div class="calculator__result-box four">
                        <button class="calculate" onclick="calculate();">Calculate</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    </div>
</div>