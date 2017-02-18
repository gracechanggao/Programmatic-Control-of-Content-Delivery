function id_list=list_subject_ids(folder_name, type)

% Leana Copeland, 2015

files = dir(folder_name);
file_index = find(~[files.isdir]);

list={};

for i=1:length(file_index)
    
    file_name = files(file_index(i)).name;
    
    if type==1 % the images
       [tutorial, remain]=strtok(file_name, '.');
       [subject_id, rest]=strtok(remain, '.');
       list=[list;subject_id];
        
    else % the csv files
        %TODO
        [subject_id, remain]=strtok(file_name, '_');
        list=[list;subject_id];
    end
    
end

[id_list,IA,IC]=unique(list);
count=histc(IC,1:length(id_list))
