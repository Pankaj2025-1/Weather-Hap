
                        try
                        {
                            var linksArray = '  https://live.primis.tech/content/video/hls/hls.0.12.4_2.min.js  https://live.primis.tech/content/prebid/prebidVid.4.43.0_8.min.js   https://live.primis.tech/live/liveVideo.php?vpaidManager=sekindo&s=58057&ri=6C69766553746174737C736B317B54307D7B64323032312D31302D30375F31367D7B7331323131353631317D7B433135397D7B53643364334C6E4A6C63325668636D4E6F5A3246305A5335755A58513D7D7B626368726F6D657D7B716465736B746F707D7B6F77696E646F77737D7B583430307D7B593239317D7B66337D7B4C363331317DFEFE&userIpAddr=103.111.47.37&userUA=Mozilla%2F5.0+%28Windows+NT+10.0%3B+Win64%3B+x64%29+AppleWebKit%2F537.36+%28KHTML%2C+like+Gecko%29+Chrome%2F94.0.4606.71+Safari%2F537.36&debugInformation=&isWePassGdpr=1&noViewableMidrollPolicy=vary&isDoublePreroll=1&autoSkipVideoSec=30&c2pWaitTime=10&csuuid=6145f508644a5&debugInfo=12115611_&debugPlayerSession=&pubUrlDEMO=&isAsyncDEMO=0&customPlaylistIdDEMO=&sta=12115611&showLogo=0&clkUrl=&plMult=-1&schedule=eyJwcmVfcm9sbCI6MSwibWlkX3JvbGwiOltdLCJnYXAiOiJhdXRvIn0%3D&content=plembed1554ylhknguw&secondaryContent=&x=400&y=291&pubUrl=https%3A%2F%2Fwww.researchgate.net%2Fpublication%2F329922758_Weather_Forecast_Prediction_An_Integrated_Approach_for_Analyzing_and_Measuring_Weather_Data&contentNum=1&flow_closeBtn=1&flowCloseTimeout=0&flow_closeButtonPosition=right&flow_direction=br&flow_horizontalOffset=1&flow_bottomOffset=1&impGap=1&flow_width=400&flow_height=225&videoType=flow&gdpr=0&gdprConsent=&contentFeedId=&geoLati=28.6145&geoLong=77.3063&vpTemplate=6311&flowMode=below&isRealPreroll=0&playerApiId=&isApp=0&ccpa=0&ccpaConsent='.split(' ');

                            for(var l = 0; l < linksArray.length; l++)
                            {
                                if(linksArray[l].length > 10)
                                {
                                    var sc = document.createElement('script');
                                    sc.type = 'text/javascript';
                                    sc.async = false;
                                    sc.src = linksArray[l];
                                    document.head.appendChild(sc);
                                }
                            }
                        }
                        catch(e)
                        {
                            document.write('<script type="text/javascript" src="https://live.primis.tech/content/video/hls/hls.0.12.4_2.min.js">\x3C/script><script type="text/javascript" src="https://live.primis.tech/content/prebid/prebidVid.4.43.0_8.min.js">\x3C/script><script type=' + "'" + 'text/javascript' + "'" + ' language=' + "'" + 'javascript' + "'" + ' src="https://live.primis.tech/live/liveVideo.php?vpaidManager=sekindo&s=58057&ri=6C69766553746174737C736B317B54307D7B64323032312D31302D30375F31367D7B7331323131353631317D7B433135397D7B53643364334C6E4A6C63325668636D4E6F5A3246305A5335755A58513D7D7B626368726F6D657D7B716465736B746F707D7B6F77696E646F77737D7B583430307D7B593239317D7B66337D7B4C363331317DFEFE&userIpAddr=103.111.47.37&userUA=Mozilla%2F5.0+%28Windows+NT+10.0%3B+Win64%3B+x64%29+AppleWebKit%2F537.36+%28KHTML%2C+like+Gecko%29+Chrome%2F94.0.4606.71+Safari%2F537.36&debugInformation=&isWePassGdpr=1&noViewableMidrollPolicy=vary&isDoublePreroll=1&autoSkipVideoSec=30&c2pWaitTime=10&csuuid=6145f508644a5&debugInfo=12115611_&debugPlayerSession=&pubUrlDEMO=&isAsyncDEMO=0&customPlaylistIdDEMO=&sta=12115611&showLogo=0&clkUrl=&plMult=-1&schedule=eyJwcmVfcm9sbCI6MSwibWlkX3JvbGwiOltdLCJnYXAiOiJhdXRvIn0%3D&content=plembed1554ylhknguw&secondaryContent=&x=400&y=291&pubUrl=https%3A%2F%2Fwww.researchgate.net%2Fpublication%2F329922758_Weather_Forecast_Prediction_An_Integrated_Approach_for_Analyzing_and_Measuring_Weather_Data&contentNum=1&flow_closeBtn=1&flowCloseTimeout=0&flow_closeButtonPosition=right&flow_direction=br&flow_horizontalOffset=1&flow_bottomOffset=1&impGap=1&flow_width=400&flow_height=225&videoType=flow&gdpr=0&gdprConsent=&contentFeedId=&geoLati=28.6145&geoLong=77.3063&vpTemplate=6311&flowMode=below&isRealPreroll=0&playerApiId=&isApp=0&ccpa=0&ccpaConsent=">\x3C/script>');
                        }
                        