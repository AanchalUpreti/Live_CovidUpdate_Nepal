<template>
    <div>
        <h1 class="covid-title"><span>Covid-19 Tracking</span>
            <br>
            <a class="faq " @click="showFaqs = !showFaqs" style="font-size: 16px;display: initial !important;color: yellow; font-weight: bolder">FAQs</a>
        </h1>
        <!-- Faqs-->

        <div class="rounded bg-bluelight px-4" v-if="showFaqs">
            <div class="py-4 border-bottom border-dark" id="general"><h3
                class="font-weight-bold mb-4 pb-2 border-bottom border-dark">General FAQs</h3>
                <ol>
                    <li class="mb-5 notranslate">
                        <div class="font-18 mb-2">What is a coronavirus?</div>
                        <div class="">Coronaviruses are a large family of viruses that may cause illness in animals or
                            humans. In humans, several coronaviruses are known to cause respiratory infections. The most
                            recently discovered coronavirus causes coronavirus disease COVID-19.
                        </div>
                    </li>
                    <li class="mb-5 notranslate">
                        <div class="font-18 mb-2">What is COVID-19?</div>
                        <div class="">COVID-19 is an infectious disease caused by the most recently discovered
                            coronavirus. This new virus and disease were unknown before the outbreak began in Wuhan,
                            China, in December 2019.
                        </div>
                    </li>
                    <li class="mb-5 notranslate">
                        <div class="font-18 mb-2">What are the symptoms of COVID-19?</div>
                        <div class="">The most common symptoms of COVID-19 are fever, tiredness, and dry cough. Some
                            patients may have aches and pains, nasal congestion, runny nose, sore throat or diarrhea.
                            These symptoms are usually mild and begin gradually. Some people become infected but don’t
                            develop any symptoms and don't feel unwell.
                        </div>
                    </li>
                    <li class="mb-5 notranslate">
                        <div class="font-18 mb-2">How does the COVID-19 disease transmit from person to person?</div>
                        <div class="">The disease can spread from person to person if they breathe in the small droplets
                            containing the virus when that person with COVID-19 coughs or exhales. These droplets land
                            on objects and surfaces around the person. Other people then catch COVID-19 by touching
                            these objects or surfaces, then touching their eyes, nose or mouth.
                        </div>
                    </li>
                    <li class="mb-5 notranslate">
                        <div class="font-18 mb-2">Can the virus that causes COVID-19 be transmitted through the air?
                        </div>
                        <div class="">Studies to date suggest that the virus that causes COVID-19 is mainly transmitted
                            through contact with respiratory droplets rather than through the air.
                        </div>
                    </li>
                    <li class="mb-5 notranslate">
                        <div class="font-18 mb-2">Can COVID-19 be caught from a person who has no symptoms?</div>
                        <div class="">It is possible to catch COVID-19 from someone who has, for example, just a mild
                            cough and does not feel ill.
                        </div>
                    </li>
                    <li class="mb-5 ">
                        <div class="font-18 mb-2">What can I do to protect myself and prevent the spread of disease?
                        </div>
                        <div class="">You can reduce your chances of being infected or spreading COVID-19 by taking some
                            simple precautions:
                            <ul class="my-2">
                                <li class="mb-2">Regularly and thoroughly clean your hands for at least 20 seconds with
                                    an alcohol-based hand rub or wash them with soap and water.
                                </li>
                                <li class="mb-2">Maintain at least 1 metre (3 feet) distance between yourself and anyone
                                    who is coughing or sneezing.
                                </li>
                                <li class="mb-2">Avoid touching eyes, nose and mouth. Hands touch many surfaces and can
                                    pick up viruses. Once contaminated, hands can transfer the virus to your eyes, nose
                                    or mouth. From there, the virus can enter your body and can make you sick.
                                </li>
                                <li class="mb-2">Cover your mouth and nose with your bent elbow or tissue when you cough
                                    or sneeze. Then dispose of the used tissue immediately.
                                </li>
                                <li class="mb-2">Stay home if you feel unwell. If you have a fever, cough and difficulty
                                    breathing, seek medical attention and call in advance. Follow the directions of your
                                    local health authority.
                                </li>
                                <li class="mb-2">traveling to places – especially if you are an older person or have
                                    diabetes, heart or lung disease.
                                </li>
                            </ul>
                            Why? You have a higher chance of catching COVID-19 in one of these areas.
                        </div>
                    </li>
                    <li class="mb-5 notranslate">
                        <div class="font-18 mb-2">Are antibiotics effective in preventing or treating the COVID-19?
                        </div>
                        <div class="">No. Antibiotics do not work against viruses, they only work on bacterial
                            infections.
                        </div>
                    </li>
                    <li class="mb-5 notranslate">
                        <div class="font-18 mb-2">Are there any medicines to cure COVID-19?</div>
                        <div class="">There is no evidence that current medicine can prevent or cure the disease. There
                            are several ongoing clinical trials that include both western and traditional medicines.
                        </div>
                    </li>
                    <li class="mb-5 notranslate">
                        <div class="font-18 mb-2">Will wearing a mask protect me from the COVID-19?</div>
                        <div class="">Not really. Only wear a mask if you are ill with COVID-19 symptoms (especially
                            coughing) or looking after someone who may have COVID-19. The most effective ways to protect
                            yourself and others against COVID-19 are to frequently clean your hands, cover your cough
                            with the bend of elbow or tissue and maintain a distance of at least 1 meter (3 feet) from
                            people.
                        </div>
                    </li>
                    <li class="mb-5 notranslate">
                        <div class="font-18 mb-2">Can humans become infected with the COVID-19 from an animal source?
                        </div>
                        <div class="">It’s possible. Handle raw meat, milk or animal organs with care to avoid
                            contamination of uncooked foods and avoid consuming raw or undercooked animal products.
                        </div>
                    </li>
                    <li class="mb-5 notranslate">
                        <div class="font-18 mb-2">Can I catch COVID-19 from my pet?</div>
                        <div class="">There is no evidence that a dog, cat or any pet can transmit COVID-19.</div>
                    </li>
                    <li class="mb-5 notranslate">
                        <div class="font-18 mb-2">How long does the virus survive on surfaces?</div>
                        <div class="">Studies suggest that coronaviruses (including preliminary information on the
                            COVID-19 virus) may persist on surfaces for a few hours or up to several days.
                        </div>
                    </li>
                    <li class="mb-5 notranslate">
                        <div class="font-18 mb-2">Will warm weather stop the outbreak?</div>
                        <div class="">At this time, it is not known whether the spread of COVID-19 will decrease when
                            weather becomes warmer.
                        </div>
                    </li>
                    <li class="mb-5 ">
                        <div class="font-18 mb-2">How can pregnant women protect themselves from getting COVID-19?</div>
                        <div class="">Pregnant women should do the same things as the general public to avoid infection.
                            You can help stop the spread of COVID-19 by taking these actions:
                            <ul class="my-2">
                                <li class="mb-2">Cover your cough (using your elbow is a good technique).</li>
                                <li class="mb-2">Avoid people who are sick.</li>
                                <li class="mb-2">Clean your hands often using soap and water or alcohol-based hand
                                    sanitizer.
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="mb-5 notranslate">
                        <div class="font-18 mb-2">Can COVID-19 be passed from a pregnant woman to the fetus or
                            newborn?
                        </div>
                        <div class="">We still do not know if a pregnant woman with COVID-19 can pass the virus that
                            causes COVID-19 to her fetus or baby during pregnancy or delivery.
                        </div>
                    </li>
                    <li class="mb-5 notranslate">
                        <div class="font-18 mb-2">Can the COVID-19 virus spread through drinking water?</div>
                        <div class="">The COVID-19 virus has not been detected in drinking water. Conventional water
                            treatment methods that use filtration and disinfection, such as those in most municipal
                            drinking water systems, should remove or inactivate the virus that causes COVID-19.
                        </div>
                    </li>
                    <li class="mb-5 ">
                        <div class="font-18 mb-2">Is the COVID-19 virus found in feces?</div>
                        <div class=""><p>The virus that causes COVID-19 has been detected in the feces of some patients
                            diagnosed with COVID-19. The amount of virus released from the body (shed) in stool, how
                            long the virus is shed, and whether the virus in the stool is infectious are not known.</p>
                            <p>The risk of transmission of COVID-19 from the feces of an infected person is also
                                unknown.</p></div>
                    </li>
                    <li class="mb-5 ">
                        <div class="font-18 mb-2">Is Teku-based hospital, Sukraraj Tropical and Infectious Disease
                            Hospital, the only hospital allocated for testing and treatment of COVID-19 in Nepal?
                        </div>
                        <div class=""><p>No. The Government of Nepal has allocated two hospitals, STIDH(Teku) hospital,
                            and Patan Hospital, where you can get tested for Covid-19 infection. Teku hospital is,
                            however, given the first priority since it specializes in dealing with all kinds of
                            infectious diseases like COVID-19. They work closely with the National Public Health
                            Laboratory which is also situated in Teku that performs the confirmatory testing for
                            COVID-19. Do remember that you do not have to go to Teku hospital to take the swab specimen
                            as other hospitals can take a specimen and send it to NPHL.</p>
                            <p>For the treatment of COVID-19, all hospitals can manage beds, ICUs and ventilators for
                                severely infected patients. Since there is no evidence that current medicine can prevent
                                or cure the disease, each case can be managed by all the hospitals, giving antiviral and
                                antibacterial therapy.</p></div>
                    </li>
                    <li class="mb-5 notranslate">
                        <div class="font-18 mb-2">With how many testing kits is the Teku hospital equipped currently?
                        </div>
                        <div class="">The last news suggests that the Teku hospital is equipped with about 1500 test
                            kits. 522 tests were performed until yesterday.
                        </div>
                    </li>
                    <li class="mb-5 notranslate">
                        <div class="font-18 mb-2">Is the swab testing carried out in Nepal or sent abroad? What is the
                            medium of transportation of the specimens?
                        </div>
                        <div class="">Swab testing is done in Nepal. In some cases, the samples of the positive cases
                            are transported to a WHO reference lab in the region for re-confirmation. The doctors are,
                            however, immediately notified when a case shows a positive result. The specimens as they are
                            highly contagious are transported using the Viral Transport Medium (VTM). In simple words,
                            it as a tube with rubber seals and has chemicals inside it to prevent the specimen from
                            disintegrating. It is generally Tripple packed in virus transport package. If the sample can
                            be taken to the laboratory within four days, they may be kept at +4 °C and frozen at -70 °C
                            on arrival if they are to be stored. Otherwise, they should be frozen at or below -70 °C
                            until they can be transported to the laboratory via air shipping.
                        </div>
                    </li>
                    <li class="mb-5 notranslate">
                        <div class="font-18 mb-2">If the test sample is transported to the laboratory outside Nepal, how
                            long does it take for the reports to arrive in Nepal?
                        </div>
                        <div class="">It depends on cases but it is not very quick. It generally takes two hours or so
                            to perform the test and can generally take a week to get the final result. The positive
                            cases are reported to doctors immediately so that you are immediately transferred to the
                            isolation room and treated accordingly.
                        </div>
                    </li>
                </ol>
                <div class="h5">Sources</div>
                <ul class="mt-2">
                    <li><a class="" href="https://www.who.int/news-room/q-a-detail/q-a-coronaviruses"
                           target="_blank" rel="noopener noreferrer">https://www.who.int/news-room/q-a-detail/q-a-coronaviruses</a>
                    </li>
                    <li><a class="" href="https://www.cdc.gov/coronavirus/2019-ncov/faq.html" target="_blank"
                           rel="noopener noreferrer">https://www.cdc.gov/coronavirus/2019-ncov/faq.html</a></li>
                    <li><a href="https://covid19.mohp.gov.np/#/about" target="_blank" class=""
                           rel="noopener noreferrer">https://covid19.mohp.gov.np/#/about</a></li>
                </ul>
            </div>
            <div class="py-5" id="mythbusters"><h3 class="font-weight-bold mt-5 pb-2 border-dark border-bottom">
                Mythbusters</h3>
                <ol class="mt-2">
                    <li class="mb-5 ">
                        <div class="font-18 mb-2">Consuming 'Bojho', Garlic or Turmeric will prevent the coronavirus
                            infection.
                        </div>
                        <div class="">It’s a Myth. Eating Bojho, Garlic and Turmeric is good for health. But until now,
                            no evidence has been found that consuming these herbs and spices can prevent the coronavirus
                            infection.
                        </div>
                    </li>
                    <li class="mb-5 notranslate">
                        <div class="font-18 mb-2">There is no sanitizer in the shop and now I cannot protect myself from
                            coronavirus infection!
                        </div>
                        <div class="">It’s a Myth. There's no need to panic if there are no hand sanitizers. What's more
                            important is that you frequently wash your hands with soap and clean water as this reduces
                            the risk of coronavirus infection. Hands should be thoroughly washed, especially between the
                            fingers, the palm, around the thumb, the front and back of the hands, and also under the
                            nails.
                        </div>
                    </li>
                    <li class="mb-5 notranslate">
                        <div class="font-18 mb-2">Smoking increases and doesn’t prevent coronavirus infection?</div>
                        <div class="">It’s a Fact. Smoking does not prevent coronavirus infection but increases the risk
                            of it. Smoking is harmful to health. Each year, some 100,000 people die due to health
                            problems caused by smoking cigarettes. People with underlying heart and other health
                            problems are more prone to the infection if they have a habit of smoking.
                        </div>
                    </li>
                    <li class="mb-5 notranslate">
                        <div class="font-18 mb-2">Rinsing the mouth with mouthwash can prevent the coronavirus
                            infection.
                        </div>
                        <div class="">It’s a Myth. There is no evidence to date that coronavirus infection can be
                            prevented by the use of mouthwashes. Although some company's use of mouthwashes will
                            temporarily eradicate some of the viruses that are inside the mouth, it cannot protect
                            against the COVID-19 infection.
                        </div>
                    </li>
                    <li class="mb-5 notranslate">
                        <div class="font-18 mb-2">The vaccine against pneumonia protect us from the coronavirus
                            infection.
                        </div>
                        <div class="">It’s a Myth. Vaccines against pneumonia such as 'pneumococcal vaccine' and
                            'hemophilus influenza' type B vaccines do not protect against the coronavirus. Since it is a
                            new and different virus, it requires a different type of vaccine. Research is being done to
                            develop the vaccine against the coronavirus, but has not yet been discovered. Although
                            vaccines against pneumonia are not useful for the prevention of coronavirus, these vaccines
                            can be used to prevent respiratory problems for health.
                        </div>
                    </li>
                    <li class="mb-5 ">
                        <div class="font-18 mb-2">Warm weather will stop the outbreak of COVID-19.</div>
                        <div class="">It is a Myth. It is not known whether the spread of COVID-19 will decrease when
                            weather becomes warmer. There is much more to learn about the transmissibility, severity,
                            and other features associated with COVID-19 and investigations are ongoing.
                        </div>
                    </li>
                    <li class="mb-5 ">
                        <div class="font-18 mb-2">Taking a hot bath will not prevent the new coronavirus disease</div>
                        <div class=""><p>It’s a Fact. Taking a hot bath will not prevent you from catching COVID-19.
                            Your normal body temperature remains around 36.5*C to 37*C, regardless of the temperature of
                            your bath or shower. Actually, taking a hot bath with extremely hot water can be harmful, as
                            it can burn you.</p>
                            <p>The best way to protect yourself against COVID-19 is by frequently cleaning your
                                hands.</p></div>
                    </li>
                    <li class="mb-5 ">
                        <div class="font-18 mb-2">The new coronavirus cannot be transmitted through mosquito bites.
                        </div>
                        <div class="">It’s a Fact. To date there has been no information nor evidence to suggest that
                            the new coronavirus could be transmitted by mosquitoes. The new coronavirus is a respiratory
                            virus which spreads primarily through droplets generated when an infected person coughs or
                            sneezes, or through droplets of saliva or discharge from the nose. To protect yourself,
                            clean your hands frequently with an alcohol-based hand rub or wash them with soap and water.
                            Also, avoid close contact with anyone who is coughing and sneezing.
                        </div>
                    </li>
                    <li class="mb-5 ">
                        <div class="font-18 mb-2">Thermal scanners can detect people infected with the new
                            coronavirus.
                        </div>
                        <div class="">It’s a Myth as they cannot detect people infected with the new coronavirus.
                            Thermal scanners are effective in detecting people who have developed a fever (i.e.have a
                            higher than normal body temperature) because of infection with the new coronavirus. However,
                            they cannot detect people who are infected but are not yet sick with fever. This is because
                            it takes between 2 and 10 days before people who are infected become sick.
                        </div>
                    </li>
                    <li class="mb-5 ">
                        <div class="font-18 mb-2">Products made in China or have been delivered from China can spread
                            the virus.
                        </div>
                        <div class="">It’s a Myth. The virus cannot survive that long and hence cannot be spread from
                            the products made in China.
                        </div>
                    </li>
                    <li class="mb-5 ">
                        <div class="font-18 mb-2">The virus can die if we consume alcohol or rub the whole body with an
                            alcohol rub.
                        </div>
                        <div class="">It’s a myth. Drinking alcohol or rubbing chlorine or alcohol rub will only cause
                            skin allergies and drinking habit.
                        </div>
                    </li>
                    <li class="mb-5 ">
                        <div class="font-18 mb-2">Drinking water and massaging the body with mustard oil can kill the
                            virus.
                        </div>
                        <div class="">It’s a myth. However, drinking hot water or gargling with warm salt water can
                            prevent the virus from traveling from your throat to the lungs. But, massaging with oil
                            won’t kill the virus or prevent the infection.
                        </div>
                    </li>
                </ol>
            </div>
        </div>
        <!-- Faqs-->
        <div class="app">
            <div class="global-cases">
                <h4 style="margin-bottom: 0px; text-decoration-line: underline;">Global Cases</h4>
                <div class="tiles">
                    <div class="card-panel">
                        <p class="orange-text">
                            <span>{{oData.total_confirmed}}</span>
                        </p>
                        <p style="text-align: center">Confirmed</p>
                    </div>
                    <div class="card-panel">
                        <p class="green-text">
                            <span>{{oData.total_recovered}}</span>
                        </p>
                        <p style="text-align: center">Recovered</p>
                    </div>
                    <div class="card-panel">
                        <p class="orange-text">
                            <span>{{oData.total_deaths}}</span>
                        </p>
                        <p style="text-align: center">Deaths</p>
                    </div>
                </div>

            </div>
            <div class="selected-country">
                <label style="color: rgb(5, 99, 175); font-size: 20px;">Select Country</label>
                <div class="custom-select-new">
                    <select @change="changeCountry()" v-model="selectedCountry">
                        <option value="Afghanistan">Afghanistan</option>
                        <option value="Albania">Albania</option>
                        <option value="Algeria">Algeria</option>
                        <option value="Andorra">Andorra</option>
                        <option value="Angola">Angola</option>
                        <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                        <option value="Argentina">Argentina</option>
                        <option value="Armenia">Armenia</option>
                        <option value="Australia">Australia</option>
                        <option value="Austria">Austria</option>
                        <option value="Azerbaijan">Azerbaijan</option>
                        <option value="Bahamas">Bahamas</option>
                        <option value="Bahrain">Bahrain</option>
                        <option value="Bangladesh">Bangladesh</option>
                        <option value="Barbados">Barbados</option>
                        <option value="Belarus">Belarus</option>
                        <option value="Belgium">Belgium</option>
                        <option value="Belize">Belize</option>
                        <option value="Benin">Benin</option>
                        <option value="Bhutan">Bhutan</option>
                        <option value="Bolivia">Bolivia</option>
                        <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                        <option value="Botswana">Botswana</option>
                        <option value="Brazil">Brazil</option>
                        <option value="Brunei">Brunei</option>
                        <option value="Bulgaria">Bulgaria</option>
                        <option value="Burkina Faso">Burkina Faso</option>
                        <option value="Burma">Burma</option>
                        <option value="Burundi">Burundi</option>
                        <option value="Cabo Verde">Cabo Verde</option>
                        <option value="Cambodia">Cambodia</option>
                        <option value="Cameroon">Cameroon</option>
                        <option value="Canada">Canada</option>
                        <option value="Central African Republic">Central African Republic</option>
                        <option value="Chad">Chad</option>
                        <option value="Chile">Chile</option>
                        <option value="China">China</option>
                        <option value="Colombia">Colombia</option>
                        <option value="Comoros">Comoros</option>
                        <option value="Congo (Brazzaville)">Congo (Brazzaville)</option>
                        <option value="Congo (Kinshasa)">Congo (Kinshasa)</option>
                        <option value="Costa Rica">Costa Rica</option>
                        <option value="Cote d'Ivoire">Cote d'Ivoire</option>
                        <option value="Croatia">Croatia</option>
                        <option value="Cuba">Cuba</option>
                        <option value="Cyprus">Cyprus</option>
                        <option value="Czechia">Czechia</option>
                        <option value="Denmark">Denmark</option>
                        <option value="Diamond Princess">Diamond Princess</option>
                        <option value="Djibouti">Djibouti</option>
                        <option value="Dominica">Dominica</option>
                        <option value="Dominican Republic">Dominican Republic</option>
                        <option value="Ecuador">Ecuador</option>
                        <option value="Egypt">Egypt</option>
                        <option value="El Salvador">El Salvador</option>
                        <option value="Equatorial Guinea">Equatorial Guinea</option>
                        <option value="Eritrea">Eritrea</option>
                        <option value="Estonia">Estonia</option>
                        <option value="Eswatini">Eswatini</option>
                        <option value="Ethiopia">Ethiopia</option>
                        <option value="Fiji">Fiji</option>
                        <option value="Finland">Finland</option>
                        <option value="France">France</option>
                        <option value="Gabon">Gabon</option>
                        <option value="Gambia">Gambia</option>
                        <option value="Georgia">Georgia</option>
                        <option value="Germany">Germany</option>
                        <option value="Ghana">Ghana</option>
                        <option value="Greece">Greece</option>
                        <option value="Grenada">Grenada</option>
                        <option value="Guatemala">Guatemala</option>
                        <option value="Guinea">Guinea</option>
                        <option value="Guinea-Bissau">Guinea-Bissau</option>
                        <option value="Guyana">Guyana</option>
                        <option value="Haiti">Haiti</option>
                        <option value="Holy See">Holy See</option>
                        <option value="Honduras">Honduras</option>
                        <option value="Hungary">Hungary</option>
                        <option value="Iceland">Iceland</option>
                        <option value="India">India</option>
                        <option value="Indonesia">Indonesia</option>
                        <option value="Iran">Iran</option>
                        <option value="Iraq">Iraq</option>
                        <option value="Ireland">Ireland</option>
                        <option value="Israel">Israel</option>
                        <option value="Italy">Italy</option>
                        <option value="Jamaica">Jamaica</option>
                        <option value="Japan">Japan</option>
                        <option value="Jordan">Jordan</option>
                        <option value="Kazakhstan">Kazakhstan</option>
                        <option value="Kenya">Kenya</option>
                        <option value="Korea, South">Korea, South</option>
                        <option value="Kosovo">Kosovo</option>
                        <option value="Kuwait">Kuwait</option>
                        <option value="Kyrgyzstan">Kyrgyzstan</option>
                        <option value="Laos">Laos</option>
                        <option value="Latvia">Latvia</option>
                        <option value="Lebanon">Lebanon</option>
                        <option value="Lesotho">Lesotho</option>
                        <option value="Liberia">Liberia</option>
                        <option value="Libya">Libya</option>
                        <option value="Liechtenstein">Liechtenstein</option>
                        <option value="Lithuania">Lithuania</option>
                        <option value="Luxembourg">Luxembourg</option>
                        <option value="MS Zaandam">MS Zaandam</option>
                        <option value="Madagascar">Madagascar</option>
                        <option value="Malawi">Malawi</option>
                        <option value="Malaysia">Malaysia</option>
                        <option value="Maldives">Maldives</option>
                        <option value="Mali">Mali</option>
                        <option value="Malta">Malta</option>
                        <option value="Mauritania">Mauritania</option>
                        <option value="Mauritius">Mauritius</option>
                        <option value="Mexico">Mexico</option>
                        <option value="Moldova">Moldova</option>
                        <option value="Monaco">Monaco</option>
                        <option value="Mongolia">Mongolia</option>
                        <option value="Montenegro">Montenegro</option>
                        <option value="Morocco">Morocco</option>
                        <option value="Mozambique">Mozambique</option>
                        <option value="Namibia">Namibia</option>
                        <option value="Nepal">Nepal</option>
                        <option value="Netherlands">Netherlands</option>
                        <option value="New Zealand">New Zealand</option>
                        <option value="Nicaragua">Nicaragua</option>
                        <option value="Niger">Niger</option>
                        <option value="Nigeria">Nigeria</option>
                        <option value="North Macedonia">North Macedonia</option>
                        <option value="Norway">Norway</option>
                        <option value="Oman">Oman</option>
                        <option value="Pakistan">Pakistan</option>
                        <option value="Panama">Panama</option>
                        <option value="Papua New Guinea">Papua New Guinea</option>
                        <option value="Paraguay">Paraguay</option>
                        <option value="Peru">Peru</option>
                        <option value="Philippines">Philippines</option>
                        <option value="Poland">Poland</option>
                        <option value="Portugal">Portugal</option>
                        <option value="Qatar">Qatar</option>
                        <option value="Romania">Romania</option>
                        <option value="Russia">Russia</option>
                        <option value="Rwanda">Rwanda</option>
                        <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                        <option value="Saint Lucia">Saint Lucia</option>
                        <option value="Saint Vincent and the Grenadines">Saint Vincent and the Gre...</option>
                        <option value="San Marino">San Marino</option>
                        <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                        <option value="Saudi Arabia">Saudi Arabia</option>
                        <option value="Senegal">Senegal</option>
                        <option value="Serbia">Serbia</option>
                        <option value="Seychelles">Seychelles</option>
                        <option value="Sierra Leone">Sierra Leone</option>
                        <option value="Singapore">Singapore</option>
                        <option value="Slovakia">Slovakia</option>
                        <option value="Slovenia">Slovenia</option>
                        <option value="Somalia">Somalia</option>
                        <option value="South Africa">South Africa</option>
                        <option value="South Sudan">South Sudan</option>
                        <option value="Spain">Spain</option>
                        <option value="Sri Lanka">Sri Lanka</option>
                        <option value="Sudan">Sudan</option>
                        <option value="Suriname">Suriname</option>
                        <option value="Sweden">Sweden</option>
                        <option value="Switzerland">Switzerland</option>
                        <option value="Syria">Syria</option>
                        <option value="Taiwan*">Taiwan*</option>
                        <option value="Tajikistan">Tajikistan</option>
                        <option value="Tanzania">Tanzania</option>
                        <option value="Thailand">Thailand</option>
                        <option value="Timor-Leste">Timor-Leste</option>
                        <option value="Togo">Togo</option>
                        <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                        <option value="Tunisia">Tunisia</option>
                        <option value="Turkey">Turkey</option>
                        <option value="US">US</option>
                        <option value="Uganda">Uganda</option>
                        <option value="Ukraine">Ukraine</option>
                        <option value="United Arab Emirates">United Arab Emirates</option>
                        <option value="United Kingdom">United Kingdom</option>
                        <option value="Uruguay">Uruguay</option>
                        <option value="Uzbekistan">Uzbekistan</option>
                        <option value="Venezuela">Venezuela</option>
                        <option value="Vietnam">Vietnam</option>
                        <option value="West Bank and Gaza">West Bank and Gaza</option>
                        <option value="Western Sahara">Western Sahara</option>
                        <option value="Yemen">Yemen</option>
                        <option value="Zambia">Zambia</option>
                        <option value="Zimbabwe">Zimbabwe</option>
                    </select>
                    <div class="tiles">
                        <div class="card-panel">
                            <p class="orange-text">
                                <span>{{confirmed}}</span>
                            </p>
                            <p style="text-align: center">Confirmed</p>
                        </div>
                        <div class="card-panel">
                            <p class="green-text">
                                <span>{{recovered}}</span>
                            </p>
                            <p style="text-align: center">Recovered</p>
                        </div>
                        <div class="card-panel">
                            <p class="orange-text">
                                <span>{{deaths}}</span>
                            </p>
                            <p style="text-align: center">Deaths</p>
                        </div>
                    </div>
                </div>
                <p style="text-align: center;font-size: 18px;font-weight: bold;">
                    <a
                        href="https://www.who.int/emergencies/diseases/novel-coronavirus-2019/">Read more</a> about
                    Covid19
                    outbreak</p>
            </div>
            <div class="map">
                <p class="text-info">Nepal Map</p>
                <iframe src="https://nepalcorona.info/embed/nepal-map" frameborder="0"
                        style="width:100%;height:400px;border:0px"></iframe>
            </div>
            <div class="nepal-table">
                <h4 style="text-decoration-line: underline; margin-bottom: 20px; margin-top: 40px; font-size: 24px;">
                    Nepal District Cases</h4>
                <div class="table-header">
                    <div class="division">Division</div>
                    <div class="column">Confirmed</div>
                    <div class="column">Recovered</div>
                    <div class="column">Death</div>
                </div>
                <div class="table-rows" v-for="data in nepalData">
                    <div class="division">{{data.title}}</div>
                    <div class="column">{{data.cases ? data.cases : 0}}</div>
                    <div class="column">{{data.active ? data.active : 0}}</div>
                    <div class="column">{{data.deaths ? data.deaths : 0}}</div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import axios from 'axios';
    // import VueAxios from 'vue-axios';
    // import {debounce} from 'vue-lodash';

    export default {
        data: function () {
            return {
                isLoading: true,
                confirmed: 0,
                recovered: 0,
                deaths: 0,
                oData: jsonData,
                selectedCountry: 'Nepal',
                nepalData: [],
                showFaqs: false,
            }
        },
        mounted() {
            // this.getInitialData();
            this.changeCountry();
            this.assembleNepalData();
            console.log('Component mounted.')
        },
        methods: {
            assembleNepalData() {
                console.log('districts' + ' => ', this.oData.districts);
                let districts = this.oData.districts;
                let data = this.oData.nepal_data.district;
                let newData = [];
                districts.map((v, i) => {
                    // console.log('index' + ' => ',i);
                    // let district_name =
                    let divisionData = {};
                    divisionData.id = v.id;
                    divisionData.title = v.title;
                    data.active.forEach(value => {
                        if (value.district == v.id) {
                            divisionData.active = value.count;
                        }
                    });
                    data.cases.forEach(value => {
                        if (value.district == v.id) {
                            divisionData.cases = value.count;
                        }
                    });
                    data.deaths.forEach(value => {
                        if (value.district == v.id) {
                            divisionData.deaths = value.count;
                        }
                    });
                    newData.push(divisionData);
                });
                this.nepalData = newData;
            },
            async getInitialData() {
                const proxyUrl = "https://cors-anywhere.herokuapp.com/";
                const url = 'https://pomber.github.io/covid19/timeseries.json';
                const json = await axios.get(proxyUrl + 'https://pomber.github.io/covid19/timeseries.json')
                    .then(response => {
                        return response.data;
                    })
                Object.entries(json).forEach((data, index) => {
                    console.log('data' + ' => ', data);
                    console.log('index' + ' => ', index);
                })
            },
            changeCountry() {
                this.confirmed = this.oData.data[this.selectedCountry].total_confirmed;
                this.recovered = this.oData.data[this.selectedCountry].total_recovered;
                this.deaths = this.oData.data[this.selectedCountry].total_deaths;
                // this.oData.data.forEach((value,index) => {
                //     console.log('value' + ' => ',value);
                //     console.log('key' + ' => ',index);
                // })
            }

        }

    }
</script>
