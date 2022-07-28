<table>
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Alat</th>
            <th>Hasil Cek</th>
            <th>Note</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($lap_pem as $lapem)
        <tr>
            <td>1</td>
            <td>Operate Time</td>
            <td>@if ($lapem->hasil_operate_time == 1)
                    Good
                @else
                    Fail
                @endif
            </td>
        <td>{{ $lapem->note_operate_time }}</td>
        </tr>
        <tr>
            <td>2</td>
            <td>Radiate Time</td>
            <td>@if ($lapem->hasil_radiate_time == 1)
                Good
            @else
                Fail
            @endif
            </td>
            <td>{{ $lapem->note_radiate_time }}</td>
        </tr>
        <tr>
            <td>3</td>
            <td>Mmi Fault</td>
            <td>@if ($lapem->hasil_mmi_fault == 1)
                Good
            @else
                Fail
            @endif
            </td>
            <td>{{ $lapem->note_mmi_fault }}</td>
        </tr>
        <tr>
            <td>4</td>
            <td>Hvps V</td>
            <td>@if ($lapem->hasil_hvps_v == 1)
                Good
            @else
                Fail
            @endif
            </td>
            <td>{{ $lapem->note_hvps_v }}</td>
        </tr><tr>
            <td>5</td>
            <td>Hvps I</td>
            <td>@if ($lapem->hasil_hvps_i == 1)
                Good
            @else
                Fail
            @endif
            </td>
            <td>{{ $lapem->note_hvps_i }}</td>
        </tr><tr>
            <td>6</td>
            <td>Mag I</td>
            <td>@if ($lapem->hasil_mag_i == 1)
                Good
            @else
                Fail
            @endif
            </td>
            <td>{{ $lapem->note_mag_i }}</td>
        </tr><tr>
            <td>7</td>
            <td>Az</td>
            <td>@if ($lapem->hasil_az == 1)
                Good
            @else
                Fail
            @endif
            </td>
            <td>{{ $lapem->note_az }}</td>
        </tr><tr>
            <td>8</td>
            <td>El</td>
            <td>@if ($lapem->hasil_el == 1)
                Good
            @else
                Fail
            @endif
            </td>
            <td>{{ $lapem->note_el }}</td>
        </tr><tr>
            <td>9</td>
            <td>Tx Cab</td>
            <td>@if ($lapem->hasil_tx_cab == 1)
                Good
            @else
                Fail
            @endif
            </td>
            <td>{{ $lapem->note_tx_cab }}</td>
        </tr><tr>
            <td>10</td>
            <td>Hot Box</td>
            <td>@if ($lapem->hasil_hot_box == 1)
                Good
            @else
                Fail
            @endif
            </td>
            <td>{{ $lapem->note_hot_box }}</td>
        </tr><tr>
            <td>11</td>
            <td>Fwd Power</td>
            <td>@if ($lapem->hasil_fwd_power == 1)
                Good
            @else
                Fail
            @endif
            </td>
            <td>{{ $lapem->note_fwd_power }}</td>
        </tr><tr>
            <td>12</td>
            <td>Rev Power</td>
            <td>@if ($lapem->hasil_rev_power == 1)
                Good
            @else
                Fail
            @endif
            </td>
            <td>{{ $lapem->note_rev_power }}</td>
        </tr><tr>
            <td>13</td>
            <td>Vswr</td>
            <td>@if ($lapem->hasil_vswr == 1)
                Good
            @else
                Fail
            @endif
            </td>
            <td>{{ $lapem->note_vswr }}</td>
        </tr><tr>
            <td>14</td>
            <td>Prf</td>
            <td>@if ($lapem->hasil_prf == 1)
                Good
            @else
                Fail
            @endif
            </td>
            <td>{{ $lapem->note_prf }}</td>
        </tr><tr>
            <td>15</td>
            <td>Rx Plus15v</td>
            <td>@if ($lapem->hasil_rx_plus15v == 1)
                Good
            @else
                Fail
            @endif
            </td>
            <td>{{ $lapem->note_rx_plus15v }}</td>
        </tr><tr>
            <td>16</td>
            <td>Rx Min15v</td>
            <td>@if ($lapem->hasil_rx_min15v == 1)
                Good
            @else
                Fail
            @endif
            </td>
            <td>{{ $lapem->note_rx_min15v }}</td>
        </tr><tr>
            <td>17</td>
            <td>Rx Plus24v</td>
            <td>@if ($lapem->hasil_rx_plus24v == 1)
                Good
            @else
                Fail
            @endif
            </td>
            <td>{{ $lapem->note_note_plus24v }}</td>
        </tr><tr>
            <td>18</td>
            <td>Io Temp</td>
            <td>@if ($lapem->hasil_io_temp == 1)
                Good
            @else
                Fail
            @endif
            </td>
            <td>{{ $lapem->note_io_temp }}</td>
        </tr><tr>
            <td>19</td>
            <td>Comp Temp</td>
            <td>@if ($lapem->hasil_comp_temp == 1)
                Good
            @else
                Fail
            @endif
            </td>
            <td>{{ $lapem->note_comp_temp }}</td>
        </tr><tr>
            <td>20</td>
            <td>Afc</td>
            <td>@if ($lapem->hasil_afc == 1)
                Good
            @else
                Fail
            @endif
            </td>
            <td>{{ $lapem->note_afc }}</td>
        </tr><tr>
            <td>21</td>
            <td>Edrp Rx Plus15v</td>
            <td>@if ($lapem->hasil_edrp9_rx_plus15v == 1)
                Good
            @else
                Fail
            @endif
            </td>
            <td>{{ $lapem->note_edrp9_rx_plus15v }}</td>
        </tr><tr>
            <td>22</td>
            <td>Edrp9 Rx Min15v</td>
            <td>@if ($lapem->hasil_edrp9_rx_min15v == 1)
                Good
            @else
                Fail
            @endif
            </td>
            <td>{{ $lapem->note_edrp9_rx_min15v }}</td>
        </tr><tr>
            <td>23</td>
            <td>Edrp Rx Plus24v</td>
            <td>@if ($lapem->hasil_edrp9_rx_plus24v == 1)
                Good
            @else
                Fail
            @endif
            </td>
            <td>{{ $lapem->note_edrp9_rx_plus24v }}</td>
        </tr><tr>
            <td>24</td>
            <td>Hvps alarm</td>
            <td>@if ($lapem->hasil_hvps_alarm == 1)
                Good
            @else
                Fail
            @endif
            </td>
            <td>{{ $lapem->note_hvps_alarm }}</td>
        </tr><tr>
            <td>25</td>
            <td>Power Supply24v</td>
            <td>@if ($lapem->hasil_power_supply24v == 1)
                Good
            @else
                Fail
            @endif
            </td>
            <td>{{ $lapem->note_power_supply24v }}</td>
        </tr><tr>
            <td>26</td>
            <td>Fan</td>
            <td>@if ($lapem->hasil_fan == 1)
                Good
            @else
                Fail
            @endif
            </td>
            <td>{{ $lapem->note_fan }}</td>
        </tr><tr>
            <td>27</td>
            <td>Mag Blower</td>
            <td>@if ($lapem->hasil_mag_blower == 1)
                Good
            @else
                Fail
            @endif
            </td>
            <td>{{ $lapem->note_mag_blower }}</td>
        </tr><tr>
            <td>28</td>
            <td>Ac Rstatus</td>
            <td>@if ($lapem->hasil_ac_rstatus == 1)
                Good
            @else
                Fail
            @endif
            </td>
            <td>{{ $lapem->note_ac_rstatus }}</td>
        </tr><tr>
            <td>29</td>
            <td>Ac Rups</td>
            <td>@if ($lapem->hasil_ac_rups == 1)
                Good
            @else
                Fail
            @endif
            </td>
            <td>{{ $lapem->note_ac_rups }}</td>
        </tr><tr>
            <td>30</td>
            <td>Bite Disply Warning</td>
            <td>@if ($lapem->hasil_bite_display_warning == 1)
                Good
            @else
                Fail
            @endif
            </td>
            <td>{{ $lapem->note_bite_display_warning }}</td>
        </tr><tr>
            <td>31</td>
            <td>Volume Browser</td>
            <td>@if ($lapem->hasil_volume_browser == 1)
                Good
            @else
                Fail
            @endif
            </td>
            <td>{{ $lapem->note_volume_browser }}</td>
        </tr><tr>
            <td>32</td>
            <td>Radio Link</td>
            <td>@if ($lapem->hasil_radio_link == 1)
                Good
            @else
                Fail
            @endif
            </td>
            <td>{{ $lapem->note_radio_link }}</td>
        </tr><tr>
            <td>33</td>
            <td>Client Pingtest</td>
            <td>@if ($lapem->hasil_client_pingtest == 1)
                Good
            @else
                Fail
            @endif
            </td>
            <td>{{ $lapem->note_client_pingtest }}</td>
        </tr><tr>
            <td>34</td>
            <td>Pc Integrasi Pingtest1</td>
            <td>@if ($lapem->hasil_pc_integrasi_pingtest1 == 1)
                Good
            @else
                Fail
            @endif
            </td>
            <td>{{ $lapem->note_pc_integrasi_pingtest1 }}</td>
        </tr><tr>
            <td>35</td>
            <td>Pc Integrasi Pingtest2</td>
            <td>@if ($lapem->hasil_pc_integrasi_pingtest2 == 1)
                Good
            @else
                Fail
            @endif
            </td>
            <td>{{ $lapem->note_pc_integrasi_pingtest2 }}</td>
        </tr><tr>
            <td>36</td>
            <td>Wg Check</td>
            <td>@if ($lapem->hasil_wg_check == 1)
                Good
            @else
                Fail
            @endif
            </td>
            <td>{{ $lapem->note_wg_check }}</td>
        </tr><tr>
            <td>37</td>
            <td>Wg Press</td>
            <td>@if ($lapem->hasil_wg_press == 1)
                Good
            @else
                Fail
            @endif
            </td>
            <td>{{ $lapem->note_wg_press }}</td>
        </tr><tr>
            <td>38</td>
            <td>Dehydrator Alarm</td>
            <td>@if ($lapem->hasil_dehydrator_alarm == 1)
                Good
            @else
                Fail
            @endif
            </td>
            <td>{{ $lapem->note_dehydrator_alarm }}</td>
        </tr><tr>
            <td>39</td>
            <td>Modem</td>
            <td>@if ($lapem->hasil_modem == 1)
                Good
            @else
                Fail
            @endif
            </td>
            <td>{{ $lapem->note_modem }}</td>
        </tr><tr>
            <td>40</td>
            <td>Router</td>
            <td>@if ($lapem->hasil_router == 1)
                Good
            @else
                Fail
            @endif
            </td>
            <td>{{ $lapem->note_router }}</td>
        </tr><tr>
            <td>41</td>
            <td>Hdds Pingtest</td>
            <td>@if ($lapem->hasil_hdds_pingtest == 1)
                Good
            @else
                Fail
            @endif
            </td>
            <td>{{ $lapem->note_hdds_pingtest }}</td>
        </tr><tr>
            <td>42</td>
            <td>Master Ems Server</td>
            <td>@if ($lapem->hasil_master_ems_server == 1)
                Good
            @else
                Fail
            @endif
            </td>
            <td>{{ $lapem->note_master_ems_server }}</td>
        </tr><tr>
            <td>43</td>
            <td>Client Ems Radome</td>
            <td>@if ($lapem->hasil_client_ems_radome == 1)
                Good
            @else
                Fail
            @endif
            </td>
            <td>{{ $lapem->note_client_ems_radome }}</td>
        </tr><tr>
            <td>44</td>
            <td>Web Ems</td>
            <td>@if ($lapem->hasil_web_ems == 1)
                Good
            @else
                Fail
            @endif
            </td>
            <td>{{ $lapem->note_web_ems }}</td>
        </tr><tr>
            <td>45</td>
            <td>Ups Status</td>
            <td>@if ($lapem->hasil_ups_status == 1)
                Good
            @else
                Fail
            @endif
            </td>
            <td>{{ $lapem->note_ups_status }}</td>
        </tr><tr>
            <td>46</td>
            <td>Line Input</td>
            <td>@if ($lapem->hasil_line_input == 1)
                Good
            @else
                Fail
            @endif
            </td>
            <td>{{ $lapem->note_line_input }}</td>
        </tr><tr>
            <td>47</td>
            <td>Line Output</td>
            <td>@if ($lapem->hasil_line_output == 1)
                Good
            @else
                Fail
            @endif
            </td>
            <td>{{ $lapem->note_line_output }}</td>
        </tr><tr>
            <td>48</td>
            <td>Battery</td>
            <td>@if ($lapem->hasil_battery == 1)
                Good
            @else
                Fail
            @endif
            </td>
            <td>{{ $lapem->note_battery }}</td>
        </tr><tr>
            <td>49</td>
            <td>Grounding</td>
            <td>@if ($lapem->hasil_grounding == 1)
                Good
            @else
                Fail
            @endif
            </td>
            <td>{{ $lapem->note_grounding }}</td>
        </tr><tr>
            <td>50</td>
            <td>Kebersihan</td>
            <td>@if ($lapem->hasil_kebersihan == 1)
                Good
            @else
                Fail
            @endif
            </td>
            <td>{{ $lapem->note_kebersihan }}</td>
        </tr>
        @endforeach
    </tbody>
</table>