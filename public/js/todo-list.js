!function(){"use strict";function o(){$(this).parentsUntil("#flaptToDo-list, #flaptToDo-list-2").toggleClass("todo-completed animated fadeIn")}$(function(){$("#add-todo-item, #add-todo-item-2").on("click",function(o){var e;o.preventDefault(),e=$("#new-todo-item, #new-todo-item-2").val(),$("#flaptToDo-list, #flaptToDo-list-2").append("<li><label class='ckbox'><input type='checkbox' name='todo-item-done', 'todo-item-done-2' class='todo-item-done', 'todo-item-done-2' value='"+e+"' /><span></span></label>"+e+" <i class='todo-item-delete ti-close'></i></li>"),$("#new-todo-item, #new-todo-item-2").val("")}),$("#flaptToDo-list, #flaptToDo-list-2").on("click",".todo-item-delete",function(o){var e,t;e=o,t=this,e.preventDefault(),$(t).parent().fadeOut("100",function(){$(t).parent().remove()})}),$(document).on("click",".todo-item-done, .todo-item-done-2",o)})}();