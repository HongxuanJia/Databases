<!-- 
3. DML
    select * from test;
    1) 插入记录 
        insert into test [(attribute1,attribute2,attribute3,...)] values (value1,value2,value3,...);
        一次性插入多条数据
        insert into test 
        values
        (value1,value2,value3,...),
        (value1,value2,value3,...),
        (value1,value2,value3,...);
    2) 更新记录
        更新一个表
        update test set attribute = newValue where primaryKey = 0001;
        更新多个表中数据
        update table1,table2,... set table1.attribute
    3) 删除记录
        删除单表中的记录
        delete from test where id=1;
        删除多表中的数据
    4) 查询记录
        select * from table;
        查询不重复的记录
        select distinct 
        条件查询
        =,<,>,>=,<=,!=, and,or
        排序和限制
        select * from table order by attribute;
            排序:
            asc 升序
            select * from table order by attribute asc;
            desc 降序
            select * from table order by attribute desc;
            套娃
            select * from table order by attribute1 desc, attribute2 asc; (从左到右)
            限制
            select * from table order by attribute asc limit 2;
            select * from table order by attribute asc limit 1,1;
            聚合
            1> sum  
            select sum() from table;
            2> count
            select count(*) from table;
            3> max
            select max(salary) from employee;
            4> min
            select min(salary) from employee;
            5> GROUP BY
            select sum(salary) from employee group by department;
            select department,sum(salary) from employee group by department;
            6> WITH ROLLUP 表明是否对分类聚合后的结果再汇总
            7> HAVING 对聚合后的结果进行条件过滤
            一起上！！！
            select count(*),max(salary),min(salary),sum(salary) from table;
            +----------+-------------+-------------+-------------+
            | count(*) | max(salary) | min(salary) | sum(salary) |
            +----------+-------------+-------------+-------------+
            |        9 |        3000 |          89 |        5707 |
            +----------+-------------+-------------+-------------+
    5) 表连接
        1> 内连接: 选取两张表中相互匹配的记录
        2> 外链接: 除了选取两张表中相互匹配的数据，还会选择其他不匹配的记录

-->

 