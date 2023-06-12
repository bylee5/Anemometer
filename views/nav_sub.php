            <li class="dropdown">
                <a href="#"
                      class="dropdown-toggle"
                      data-toggle="dropdown">
                        Slow Queries by Cases 
                      <b class="caret"></b>

                </a>
                <ul class="dropdown-menu">

                    <li><a href="<?php echo site_url().'?action=report&datasource=localhost&dimension-ts_min_start=-1+month&dimension-ts_min_end=now&fact-first_seen=&table_fields%5B%5D=checksum&table_fields%5B%5D=snippet&table_fields%5B%5D=query_time_avg&table_fields%5B%5D=fact.first_seen&table_fields%5B%5D=fact.last_seen&table_fields%5B%5D=fact.reviewed_by&table_fields%5B%5D=fact.reviewed_on&table_fields%5B%5D=fact.reviewed_status&table_fields%5B%5D=dimension.hostname_max&table_fields%5B%5D=dimension.db_max&table_fields%5B%5D=dimension.user_max&table_fields%5B%5D=dimension.ip_max&table_fields%5B%5D=dimension.ts_cnt&table_fields%5B%5D=dimension.Query_time_sum&table_fields%5B%5D=dimension.Rows_examined_max&dimension-hostname_max=&fact-group=checksum&fact-order=ts_cnt+DESC%2C+query_time_avg+DESC%2C+Rows_examined_max+DESC&fact-having=last_seen+%3E%3D+DATE_SUB%28DATE_FORMAT%28NOW%28%29%2C+%27%25Y-%25m-%25d+00%3A00%3A00%27%29%2C+INTERVAL+1+MONTH%29&fact-limit=100&submit=Search&fact-where=%28%0D%0Ahostname_max+%3D+%27호스트네임1%27%0D%0Aor+hostname_max+%3D+%27호스트네임2%27%0D%0A%29%0D%0Aand+user_max+not+in%28%0D%0A%27dba%27%0D%0A%2C%27강이슬%27%0D%0A%2C%27정태진%27%0D%0A%2C%27이범용%27%0D%0A%29&fact-sample=&fact-reviewed_status=&fact-checksum='; ?>">replica가 아닌 master</a></li>
				</ul>
			</li>
            <li class="dropdown">
                <a href="#"
                      class="dropdown-toggle"
                      data-toggle="dropdown">
                        Report
                      <b class="caret"></b>

                </a>
                <ul class="dropdown-menu">
                    <li><a href="<?php echo site_url().'?action=report&datasource=localhost&dimension-ts_min_start=-1+month&dimension-ts_min_end=now&fact-first_seen=&table_fields%5B%5D=checksum&table_fields%5B%5D=snippet&table_fields%5B%5D=index_ratio&table_fields%5B%5D=query_time_avg&table_fields%5B%5D=dimension.ts_cnt&table_fields%5B%5D=dimension.Query_time_sum&table_fields%5B%5D=rows_examined_avg&table_fields%5B%5D=rows_sent_avg&table_fields%5B%5D=rows_examined%2Fsent_avg&table_fields%5B%5D=fact.first_seen&table_fields%5B%5D=fact.last_seen&table_fields%5B%5D=dimension.hostname_max&table_fields%5B%5D=dimension.db_max&table_fields%5B%5D=dimension.user_max&table_fields%5B%5D=dimension.ip_max&table_fields%5B%5D=fact.reviewed_by&table_fields%5B%5D=fact.reviewed_on&table_fields%5B%5D=fact.reviewed_status&dimension-hostname_max=&fact-group=checksum&fact-order=%60rows_examined%2Fsent_avg%60+DESC%2C+ts_cnt+DESC%2C+query_time_avg+DESC%2C+Rows_examined_max+DESC&fact-having=last_seen+%3E%3D+DATE_SUB%28DATE_FORMAT%28NOW%28%29%2C+%27%25Y-%25m-%25d+00%3A00%3A00%27%29%2C+INTERVAL+3+MONTH%29+and+%28%60rows_examined%2Fsent_avg%60+%3E+10+or+%60rows_examined%2Fsent_avg%60+is+null+or+query_time_avg+%3E+10++or+ts_cnt+%3E+1000%29&fact-limit=500&submit=Search&fact-where=hostname_max+in+%28%0D%0A%27db1.example.com%27%0D%0A%2C%27db-a.example.com%27%0D%0A%2C%27db-b.example.com%27%0D%0A%29%0D%0Aand+user_max+not+in%28%0D%0A%27dba%27%0D%0A%2C%27pmmuser%27%0D%0A%2C%27강이슬%27%0D%0A%2C%27정태진%27%0D%0A%2C%27이범용%27%0D%0A%29&fact-sample=&fact-reviewed_status=&fact-checksum='; ?>">db1 슬로우쿼리</a></li>
                </ul>
            </li>

